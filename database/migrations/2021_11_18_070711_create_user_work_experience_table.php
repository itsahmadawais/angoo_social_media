<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserWorkExperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_work_experience', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('company',100);
            $table->string('position',100);
            $table->string('city',200);
            $table->string('description',500)->nullable();
            $table->boolean('currently_work_there')->default(true);
            $table->string('started_year');
            $table->string('ended_year')->nullable();
            $table->unsignedBigInteger('privacy_id')->nullable();
            $table->foreign('privacy_id')->references('id')->on('privacies');
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
        Schema::dropIfExists('user_work_experience');
    }
}
