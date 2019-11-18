<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product__information', function (Blueprint $table) {
             $table->bigIncrements('id');
             $table->string('product_name');
             $table->integer('product_price');
             $table->longtext('product_description');
             $table->string('product_picture');
             $table->string('product_quantity');
             $table->string('product_company');
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
        Schema::dropIfExists('product__information');
    }
}
