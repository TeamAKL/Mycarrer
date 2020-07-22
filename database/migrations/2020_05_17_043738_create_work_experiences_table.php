<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('work_experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('desigination');
            $table->string('organisation');
            $table->string('current_company');
            $table->string('work_from');
            $table->string('work_till')->default('Present')->nullable();
            // $table->string('notc_period');
            // $table->string('salary_unit');
            // $table->string('salary_amount');
            // $table->string('salary_mode');
            $table->text('profile_detail');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('work_experiences');
    }
}
