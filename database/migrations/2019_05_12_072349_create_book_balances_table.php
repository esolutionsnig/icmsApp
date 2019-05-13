<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookBalancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_balances', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bb_client')->unsigned()->index();
            $table->foreign('bb_client')->references('bank_id')->on('banks')->onDelete('cascade');
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
        Schema::dropIfExists('book_balances');
    }
}
