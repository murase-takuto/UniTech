<?php

namespace App\Consts;

class ReviewStatusConsts
{
    // キラメイジャーのメンバー
    public const REVIEWING = 1;
    public const REVIEWED = 2;
    public const REJECTED = 3;
    public const PASSED = 4;
    public const REVERSED = 5;
    public const REVIEW_STATUS_LIST = [
        self::REVIEWING => [
            'title' => 'レビュー中',
            'color' => '',
        ],
        self::REVIEWED => [
            'title' => 'レビュー済み',
            'color' => '',
        ],
        self::REJECTED => [
            'title' => '不合格',
            'color' => '',
        ],
        self::PASSED => [
            'title' => '合格',
            'color' => '',
        ],
        self::REVERSED => [
            'title' => '取り下げ済み',
            'color' => '',
        ],
    ];
}
