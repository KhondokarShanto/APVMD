<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMerchandiserInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('merchandiser__information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('merchandiser_user_id');
            $table->string('merchandiser_image');
            $table->string('merchandiser_fname');
            $table->string('merchandiser_lname');
            $table->string('merchandiser_phone');
            $table->string('merchandiser_email');
            $table->string('merchandiser_nid');
            $table->timestamp('merchandiser_birth_date');
            $table->string('merchandiser_age');
            $table->string('merchandiser_present_address');
            $table->string('merchandiser_per_address');
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
        Schema::dropIfExists('merchandiser__information');
    }
}
