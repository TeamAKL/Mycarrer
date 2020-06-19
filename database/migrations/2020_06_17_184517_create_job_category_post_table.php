<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobCategoryPostTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('job_category_post', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('job_category_id')->index();
            $table->foreign('job_category_id')->references('id')->on('job_categories')->onDelete('cascade');

            $table->unsignedBigInteger('post_id')->index();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

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
        Schema::dropIfExists('job_category_post');
    }
}
