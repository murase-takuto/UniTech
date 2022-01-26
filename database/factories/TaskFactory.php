<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'task_number' => $this->faker->unique()->numberBetween(1, 30),
            'title' => 'ユーザー側の商品一覧画面を作成しよう。',
            'content' => '管理側の商品一覧・詳細・追加・編集画面を作成しましょう。

            [仕様]
            ・ログイン後に、（管理側）商品一覧ページに遷移
            ・各画面の表示項目は、ユーザー側に合わせてください
            ・商品一覧ページ
            （商品名が詳細のリンク、商品追加のリンクを任意の場所に設置）
            ・商品詳細ページ
            （商品編集のリンクを任意の場所に設置「編集可能な項目：商品名、説明文、在庫数」
            
            
            確認用URLと
            routes/web.php
            管理者用商品コントローラー
            管理者用商品一覧のビュー
            の3ファイルを提出してください。',
            'attention' => $this->faker->sentence(),
            'admin_check_memo' => $this->faker->sentence(),
        ];
    }
}
