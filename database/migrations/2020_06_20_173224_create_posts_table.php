<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('position');
            $table->string('experience');
            $table->string('type');
            $table->string('address');
            $table->string('employer_type');
            $table->string('employer_number')->nullable();
            $table->integer('min_salary')->nullable();
            $table->integer('max_salary')->nullable();
            $table->string('salary_unit')->nullable();
            $table->string('department')->nullable();
            $table->string('report_to')->nullable();
            $table->text('job_description');
            $table->text('job_requirement');
            $table->integer('urgent')->default(0);
            $table->string('job_status')->default('active');
            $table->unsignedBigInteger('company_id')->index();
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
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
        Schema::dropIfExists('posts');
    }
}
