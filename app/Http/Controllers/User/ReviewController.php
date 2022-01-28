<?php

namespace App\Http\Controllers\User;

use App\Consts\ReviewStatusConsts;
use App\Consts\SlackChannelConsts;
use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Task;
use App\Services\Slack\SlackFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Slack;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::all();
        return view('user.review.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = Task::find(Auth::user()->trying_task_id);
        return view('user.review.create', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $message = Auth::user()->name . 'さんが課題' . $taskNumber . 'を提出しました。';
        $attatchment = [
            'action' => [
                'title' => 'コードを確認する',
                'url' => url("/review/{$review->id}"),
                'style' => ''
            ]
        ];
        Slack::send(SlackChannelConsts::USER_REVIEW_NOTIFICATION, $message, $attatchment);
        return redirect()->route('user.dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $review = Review::find($id);
        if (!$review) throw new NotFoundHttpException('Review Not Found.');
        return view('user.review.show', compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
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
