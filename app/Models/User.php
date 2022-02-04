<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'avatar',
        'slack_id',
        'password',
        'trying_task_id'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public static function updateToNextTask($userId) {
        if (!$userId) throw new BadRequestException('User_ID is Not Found.');
        $user = User::find($userId);
        $currentTask = Task::find($user->trying_task_id);
        $nextTask = Task::where('task_number', $currentTask->task_number + 1)->first();
        // TODO: 最後の課題をクリアした場合($nextTaskが見つからない)に対応
        // if (!$nextTask) dd(1);
        // 更新処理
        $user->trying_task_id = $nextTask->id;
        if (!$user->save()) return false;
        return true;
    }

    public function task() {
        return $this->hasOne(Task::class, 'id', 'trying_task_id');
    }
}
