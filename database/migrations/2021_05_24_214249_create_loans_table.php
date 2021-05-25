<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id();

            $table->string('amount');
            $table->string('months_payable');
            $table->string('note');
        

            $table->enum('laon_type',[
                'calamity','Salary'
            ]);


            $table->unsignedBigInteger('employees_id')->index();
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
        Schema::dropIfExists('loans');
    }
}
