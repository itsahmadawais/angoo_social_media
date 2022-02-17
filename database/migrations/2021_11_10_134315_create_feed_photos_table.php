<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedPhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feed_photos', function (Blueprint $table) {
            $table->id();
            
            $table->string('alt',100)->nullable();

            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->foreign('gallery_id')->references('id')->on('feed_gallery');

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
        Schema::dropIfExists('feed_photos');
    }
}
