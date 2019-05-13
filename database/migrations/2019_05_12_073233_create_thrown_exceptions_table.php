<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThrownExceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thrown_exceptions', function (Blueprint $table) {
            $table->bigIncrements('ex_id');
            $table->string('seal_number');
            $table->string('currency');
            $table->string('denomination');
            $table->integer('expected_Amount');
            $table->integer('actual_amount');
            $table->string('thrown_by');
            $table->string('thrown_on');
            $table->string('thrown_comment');
            $table->string('thrown_to');
            $table->string('reviewed_by');
            $table->string('reviewed_on');
            $table->string('reviewed_comment');
            $table->string('ex_status');
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
        Schema::dropIfExists('thrown_exceptions');
    }
}
