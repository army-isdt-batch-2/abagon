<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimeKeepingRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_keeping_records', function (Blueprint $table) {
            $table->id();


            $table->time('clockin');
            $table->time('clockout');
            $table->longtext('total');


            $table->unsignedBigInteger('employees_id')->index();
            $table->unsignedBigInteger('timekeeping_id')->index();


            $table->foreign('timekeeping_id')->references('id')->on('time_keeping');
            $table->foreign('employees_id')->references('id')->on('employees');


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
        Schema::dropIfExists('time_keeping_records');
    }
}
