<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_albums', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->unsignedBigInteger('gallery_id')->nullable();
            $table->foreign('gallery_id')->references('id')->on('feed_gallery');
            
            $table->string('title',100)->default('untitled');
            $table->string('description',500)->nullable();
            $table->string('slug',100)->unique();

            $table->unsignedBigInteger('privacy_id');
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
        Schema::dropIfExists('user_albums');
    }
}
