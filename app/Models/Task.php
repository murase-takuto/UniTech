<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'task_number',
        'title',
        'content',
        'attention',
        'admin_check_memo',
    ];

    public function review() {
        return $this->hasMany(Review::class);
    }
}
