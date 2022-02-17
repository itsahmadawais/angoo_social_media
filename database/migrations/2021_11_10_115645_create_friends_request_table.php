<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFriendsRequestTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('friends_request', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('source_id');
            $table->foreign('source_id')->references('id')->on('users');

            
            $table->unsignedBigInteger('target_id');
            $table->foreign('target_id')->references('id')->on('users');

            $table->string('status',100)->default('pending');

            

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
        Schema::dropIfExists('friends_request');
    }
}
