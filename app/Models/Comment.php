<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'review_id',
        'user_id',
        'content',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function review() {
        return $this->belongsTo(Review::class);
    }
}
