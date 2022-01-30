<?php

namespace App\Http\Controllers\Admin;

use App\Consts\ReviewStatusConsts;
use App\Consts\SlackChannelConsts;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\User;
use App\Services\Slack\SlackFacade;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewController extends Controller
{
    /**
     * レビュー一覧画面生成
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('admin.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * レビュー詳細を表示
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        if (!$review) throw new NotFoundHttpException('Review Not Found.');
        return view('admin.review.show', compact('review'));
    }

    /**
     * 編集画面表示(新規レビューもこのメソッドで実行)
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::find($id);
        if (!$review) throw new NotFoundHttpException('Review Not Found.');
        return view('admin.review.edit', compact('review'));
    }

    /**
     * レビュー更新処理(新規レビューもこのメソッドで実行)
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $review = Review::find($id);
        $review->id = $id;
        $review->status = $request->review_status;
        $review->review_comment = $request->review_comment;
        $review->save();
        // 合格の場合には次の課題に進める
        if ($request->status == ReviewStatusConsts::PASSED) User::updateToNextTask($review->user_id);
        $attatchment = [
            'action' => [
                'title' => 'レビューを確認する',
                'url' => url("/review/{$review->id}"),
                'style' => ''
            ]
        ];
        $message = "<@" . $review->user->slack_id . ">" . PHP_EOL . $review->user->name . "さんの課題" . $review->task->task_number . "がレビューされました。";
        SlackFacade::send(SlackChannelConsts::USER_REVIEW_NOTIFICATION, $message, $attatchment);
        $message = "<!channel>" . PHP_EOL . $review->user->name . 'さんの課題' . $review->task->task_number . 'のレビューが完了しました。';
        SlackFacade::send(SlackChannelConsts::ADMIN_REVIEW_NOTIFICATION, $message, $attatchment);
        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
