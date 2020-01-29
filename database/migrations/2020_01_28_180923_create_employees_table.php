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
            //Personal Entry Values
            $table->bigIncrements('id');
            $table->char('name', 100);
            $table->char('surname', 100);
            $table->string('idnumber');
            $table->date('dob');
            $table->char('gender', 100);
            $table->char('address', 100);

            //Work Entry Values
            $table->string('position', 100);
            $table->string('yearsActive', 100);
            $table->string('salary');
            $table->string('currentStatus', 100);

            //Timestamps
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
