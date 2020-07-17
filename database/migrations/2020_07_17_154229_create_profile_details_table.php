<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_details', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('home_town');
            $table->string('gender');
            $table->string('marital_status');
            $table->string('permanent_address');
            $table->string('date_of_birth');
            $table->string('nationality');
            $table->string('profile_image')->nullable();
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
        Schema::dropIfExists('profile_details');
    }
}
