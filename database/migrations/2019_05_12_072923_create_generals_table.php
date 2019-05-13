<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGeneralsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('generals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->string('surname');
            $table->string('sirstname');
            $table->string('middlename');
            $table->string('dob');
            $table->string('gender');
            $table->string('phoneNumber');
            $table->string('address');
            $table->string('state');
            $table->string('country');
            $table->string('occupation');
            $table->string('profile');
            $table->string('dp');
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
        Schema::dropIfExists('generals');
    }
}
