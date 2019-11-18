<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrderInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order__information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('order_name');
            $table->string('order_area');
            $table->timestamp('order_submited_time');
            $table->string('order_total_price');
            $table->string('order_type');
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
        Schema::dropIfExists('order__information');
    }
}
