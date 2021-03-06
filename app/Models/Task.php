<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class Task extends Model
{
    use HasFactory, SoftDeletes;

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

    public static function getTaskNumberByPrimaryKey($taskId) {
        if (!$taskId) throw new BadRequestException();
        $task = Task::find($taskId);
        return $task->task_number;
    }
}
