<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskInformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('task__information', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('task_name');
            $table->string('task_area');
            $table->timestamp('task_assigned_time');
            $table->string('task_submited_time');
            $table->string('task_deadline');
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
        Schema::dropIfExists('task__information');
    }
}
