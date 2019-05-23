<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookballancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookballances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('banks_id')->unsigned()->index();
            $table->foreign('banks_id')->references('id')->on('banks')->onDelete('cascade');
            $table->integer('bb_balance');
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
        Schema::dropIfExists('bookballances');
    }
}
