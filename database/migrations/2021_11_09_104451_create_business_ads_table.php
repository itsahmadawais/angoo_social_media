<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessAdsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('business_ads', function (Blueprint $table) {
            $table->id();
            $table->string('title',100)->unique();
            $table->string('company_name',100)->nullable();
            $table->string('product_name',100)->nullable();
            $table->string('website_url',200);
            $table->date('start_date');
            $table->date('end_date');
            $table->string('ad_headline',200);
            $table->string('ad_message',200)->nullable();
            $table->unsignedBigInteger('ad_amount')->default(0);
            $table->string('ad_status',100)->default('pending');
            $table->unsignedBigInteger('business_catgeory');
            $table->foreign('business_catgeory')->references('id')->on('business_categories');
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
        Schema::dropIfExists('business_ads');
    }
}
