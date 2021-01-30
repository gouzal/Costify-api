<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingPricesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_prices', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("company_id");
            $table->unsignedBigInteger("from_country_id");
            $table->unsignedBigInteger("to_country_id");
            $table->integer("price");
            $table->timestamps();
            
            $table->foreign('company_id')->references('id')->on('shipping_companies');
            $table->foreign('from_country_id')->references('id')->on('countries');
            $table->foreign('to_country_id')->references('id')->on('countries');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shipping_prices');
    }
}
