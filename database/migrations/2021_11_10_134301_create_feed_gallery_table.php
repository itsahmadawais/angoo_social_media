<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedGalleryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_gallery', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('feed_id')->nullable();
            //$table->foreign('feed_id')->references('id')->on('feeds');
            /**
             * Feed
             * Album
             */
            $table->string('type',100)->default('feed');
            
            
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
        Schema::dropIfExists('feed_gallery');
    }
}
