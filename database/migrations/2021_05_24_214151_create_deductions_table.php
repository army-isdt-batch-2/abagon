<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDeductionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deductions', function (Blueprint $table) {
            $table->id();

            

            $table->enum('contribution_type',[
                'tax','PhilHealth','Pagibig','SSS'

                   
            ]);
            $table->integer('basic_range')->index() ;
            $table->integer('employeer_share')->index() ;
            $table->integer('employee_share')->index() ;
            $table->integer('montly_contribution')->index() ;


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
        Schema::dropIfExists('deductions');
    }
}
