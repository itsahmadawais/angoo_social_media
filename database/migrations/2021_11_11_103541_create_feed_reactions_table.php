<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedReactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_reactions', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('feed_id');
            $table->foreign('feed_id')->references('id')->on('feeds');
            
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('reaction_id');
            $table->foreign('reaction_id')->references('id')->on('reactions');
            
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
        Schema::dropIfExists('feed_reactions');
    }
}
