<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;

    protected $dates = ['reviewed_at'];

    protected $fillable = [
        'task_id',
        'user_id',
        'reviewer_id',
        'status',
        'url',
        'file_first',
        'file_second',
        'file_third',
        'submit_comment',
        'review_comment',
        'reviewed_at',
    ];

    public function task() {
        return $this->belongsTo(Task::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comments() {
        return $this->hasMany(Comment::class);
    }

    public function getOwnReviews() {
        return $this->where('user_id', Auth::id())->get();
    }
}
