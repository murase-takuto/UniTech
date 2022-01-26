<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_id',
        'user_id',
        'reviewer_id',
        'status',
        'url',
        'file_first',
        'file_second',
        'file_third',
        'submit_commment',
        'review_comment',
        'reviewed_at',
    ];

    public function task() {
        return $this->belongsTo(Task::class);
    }

    public function getOwnReviews() {
        return $this->where('user_id', Auth::id())->get();
    }
}
