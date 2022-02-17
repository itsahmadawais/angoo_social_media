<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Role Database Table
         */
        Schema::create('role',function(Blueprint $table){
            $table->increments('id');
            $table->string('title',200)->unique();
            $table->timestamps();
        });
        /**
         * Gender Database Table
         */
        Schema::create('gender',function(Blueprint $table){
            $table->increments('id');
            $table->string('title',200)->unique();
            $table->timestamps();
        });
        /**
         * Location Database Table
         */
        Schema::create('location',function(Blueprint $table){
            $table->increments('id');
            $table->string('country',200)->nullable();
            $table->string('state',200)->nullable();
            $table->string('city',200)->nullable();
            $table->string('zipcode',200)->nullable();
            $table->timestamps();
        });
        /**
         * User Database Table
         */
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('first_name',100);
            $table->string('last_name',100);
            $table->string('username',100)->unique();
            $table->string('email')->unique();
            $table->string('phone',20)->unique();
            $table->string('cover_photo',100)->nullable();
            $table->boolean('is_banned')->default(false);
            $table->string('about',500)->nullable();
            $table->string('address',500)->nullable();
            $table->date('dob')->nullable();
            /**
             * Foreign Keys
             */
            $table->unsignedBigInteger('role_id');
            $table->foreign('role_id')->references('id')->on('role');
            
            $table->unsignedBigInteger('location_id')->nullable();
            $table->foreign('location_id')->references('id')->on('location');
            
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('gender');

            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
