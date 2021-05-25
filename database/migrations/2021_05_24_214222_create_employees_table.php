<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();

            $table->binary('photo');
            $table->string('full_name');
            $table->string('last_name');
            $table->string('middle_initial');
            $table->string('contact');
            $table->string('address');
            $table->string('designation');
            $table->date('birthday');
            $table->string('rate');

            $table->enum('gender',[
                'male','female'
            ]);

            $table->unsignedBigInteger('department_id')->index();
            $table->unsignedBigInteger('SSS')->index();
            $table->unsignedBigInteger('PhilHealth')->index();
            $table->unsignedBigInteger('Pagibig')->index();
            $table->unsignedBigInteger('tax')->index();
   




            $table->foreign('department_id')->references('id')->on('department');
            $table->foreign('SSS')->references('id')->on('deductions');
            $table->foreign('PhilHealth')->references('id')->on('deductions');
            $table->foreign('Pagibig')->references('id')->on('deductions');
            $table->foreign('tax')->references('id')->on('deductions');


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
        Schema::dropIfExists('employees');
    }
}
