privacy_id<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feeds', function (Blueprint $table) {
            $table->id();
            
            $table->unsignedBigInteger('posted_by');
            $table->foreign('posted_by')->references('id')->on('users');

            $table->string('message',3000)->nullable();
            $table->boolean('has_gallery')->default(false);
            /**
             * Simple
             * Check-in
             */
            $table->string('type',100);

            $table->unsignedBigInteger('privacy_id');
            $table->foreign('privacy_id')->references('id')->on('privacies');

            $table->timestamps();
        });
    }

    /**Aaaaaa
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('feeds');
    }
}
