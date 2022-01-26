<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();
            $table->integer('task_id');
            $table->integer('user_id');
            $table->integer('reviewer_id')->nullable();
            $table->integer('status');
            $table->string('url');
            $table->longText('file_first')->nullable();
            $table->longText('file_second')->nullable();
            $table->longText('file_third')->nullable();
            $table->string('submit_comment');
            $table->string('review_comment');
            $table->string('reviewed_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
