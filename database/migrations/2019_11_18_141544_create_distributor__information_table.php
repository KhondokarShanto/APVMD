<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDistributorInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distributor__information', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->bigInteger('distributor_user_id');
          $table->string('distributor_image');
          $table->string('distributor_fname');
          $table->string('distributor_lname');
          $table->string('distributor_phone1');
          $table->string('distributor_phone2');
          $table->string('distributor_email');
          $table->string('distributor_nid');
          $table->timestamp('distributor_birth_date');
          $table->string('distributor_age');
          $table->string('distributor_blood');
          $table->string('distributor_preaddress');
          $table->string('distributor_peraddress');
          $table->string('distributor_marital_status');
          $table->string('guardian_name');
          $table->string('guardian_phone1');
          $table->string('guardian_phone2');
          $table->string('guardian_relation');
          $table->string('guardian_address');
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
        Schema::dropIfExists('distributor__information');
    }
}
