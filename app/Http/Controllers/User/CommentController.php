<?php

namespace App\Http\Controllers\User;

use App\Consts\SlackChannelConsts;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Task;
use App\Services\Slack\SlackFacade;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $comment = Comment::create([
            'review_id' => $request->review_id,
            'user_id'   => Auth::id(),
            'content'   => $request->comment, 
        ]);
        $attatchment = [
            'action' => [
                'title' => 'コメントを確認する',
                'url' => route("user.review.show", $request->review_id),
                'style' => ''
            ]
        ];
        $taskNumber = Task::getTaskNumberByPrimaryKey($comment->user->trying_task_id);
        $message = "<@" . $comment->review->user->slack_id . ">" . PHP_EOL . $comment->review->user->name . 'さんが提出した課題' . $taskNumber . 'に' . Auth::user()->name . 'さんがコメントしました。';
        SlackFacade::send(SlackChannelConsts::USER_REVIEW_NOTIFICATION, $message, $attatchment);
        return redirect()->route('user.review.show', $request->review_id)->with('flash_success', 'コメントを送信しました。');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
