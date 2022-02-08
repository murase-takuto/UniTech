<?php

namespace App\Http\Controllers\User;

use App\Consts\ReviewStatusConsts;
use App\Consts\SlackChannelConsts;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Task;
use App\Services\Slack\SlackFacade;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewController extends Controller
{
    /**
     * 他のユーザーが提出したコード一覧を表示
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // TODO: 全レビューを取得する際に自分がクリアした課題のみにするかどうか仕様決定
        // TODO: 全権取得しておいてView側でリンクを表示させないようにするのもアリ
        $reviews = Review::paginate(20);
        return view('user.review.index', compact('reviews'));
    }

    /**
     * 課題提出画面の表示
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $reviewing = Review::where([
            'user_id' => Auth::id(),
            'task_id' => Auth::user()->trying_task_id,
            'status'  => ReviewStatusConsts::REVIEWING,
        ])->first();
        if ($reviewing) throw new Exception('課題がレビュー待ちの間は新しく提出することができません。');
        $task = Task::find(Auth::user()->trying_task_id);
        return view('user.review.create', compact('task'));
    }

    /**
     * 課題提出のDB保存処理
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $reviewing = Review::where([
            'user_id' => Auth::id(),
            'task_id' => Auth::user()->trying_task_id,
            'status'  => ReviewStatusConsts::REVIEWING,
        ])->first();
        if ($reviewing) throw new Exception('課題がレビュー待ちの間は新しく提出することができません。');

        $review = Review::create([
            'task_id' => Auth::user()->trying_task_id,
            'user_id' => Auth::id(),
            'status' => ReviewStatusConsts::REVIEWING,
            'url' => $request->url,
            'file_first' => $request->file_first,
            'file_second' => $request->file_second,
            'file_third' => $request->file_third,
            'submit_comment' => $request->submit_comment,
        ]);
        $taskNumber = Task::getTaskNumberByPrimaryKey(Auth::user()->trying_task_id);
        $attatchment = [
            'action' => [
                'title' => 'コードを確認する',
                'url' => route("user.review.show", $review->id),
                'style' => ''
            ]
        ];
        $message = "<@" . Auth::user()->slack_id . ">" . PHP_EOL . Auth::user()->name . 'さんが課題' . $taskNumber . 'を提出しました。';
        SlackFacade::send(SlackChannelConsts::USER_REVIEW_NOTIFICATION, $message, $attatchment);
        $attatchment = [
            'action' => [
                'title' => 'レビューする',
                'url' => route("admin.review.show", $review->id),
                'style' => ''
            ]
        ];
        $message = "<!channel>" . PHP_EOL . $review->user->name . 'さんの課題' . $review->task->task_number . 'が提出されました。';
        SlackFacade::send(SlackChannelConsts::ADMIN_REVIEW_NOTIFICATION, $message, $attatchment);
        return redirect()->route('user.dashboard')->with('flash_success', 'コードを提出しました。');
    }

    /**
     * レビュー詳細画面を表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        if (!$review) abort(404, 'Not Found');
        if ($review->task->task_number > Auth::user()->task->task_number) return redirect()->route('user.dashboard')->with('flash_failed', '合格していない課題のコードは閲覧できません。');
        return view('user.review.show', compact('review'));
    }

    /**
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * レビューを取り下げる（実装するか検討中）
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
