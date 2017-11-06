<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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

            $table->increments('id');
            $table->integer('photo_id')->index()->unsigned()->nullable(1);
            $table->string('lastname');
            $table->string('firstname');
            $table->string('middlename');
            $table->string('street');
            $table->string('houseno');
            $table->string('city');
            $table->string('region');
            $table->string('brgy');
            $table->string('zipcode');
            $table->string('birthdate');
            $table->string('birthplace');
            $table->integer('marital_id')->index()->unsigned()->nullable(1);
            $table->string('aphone');
            $table->string('phone');
            $table->string('hphone');
            $table->string('email');
            $table->string('facebook');
            $table->string('ename');
            $table->string('relationship');
            $table->string('eaddress');
            $table->string('econtact');
            $table->string('ealcontact');
            $table->integer('employeeid')->default(0);
            $table->integer('role_id')->index()->unsigned()->nullable(1);
            $table->integer('department_id')->index()->unsigned()->nullable(1);
            $table->double('salary')->default(0);
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
