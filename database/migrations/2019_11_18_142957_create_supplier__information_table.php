<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplierInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier__information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('supplier_user_id');
            $table->string('supplier_image');
            $table->string('supplier_fname');
            $table->string('supplier_lname');
            $table->string('supplier_phone1');
            $table->string('supplier_phone2');
            $table->string('supplier_email');
            $table->string('supplier_nid');
            $table->timestamp('supplier_birth_date');
            $table->string('supplier_age');
            $table->string('supplier_blood');
            $table->string('supplier_preaddress');
            $table->string('supplier_peraddress');
            $table->string('supplier_marital_status');
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
        Schema::dropIfExists('supplier__information');
    }
}
