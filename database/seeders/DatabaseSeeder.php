<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(200)->create();
        \App\Models\Admin::factory(20)->create();
        \App\Models\Task::factory(30)->create();
        \App\Models\Review::factory(3000)->create();
        \App\Models\Comment::factory(300)->create();
    }
}
