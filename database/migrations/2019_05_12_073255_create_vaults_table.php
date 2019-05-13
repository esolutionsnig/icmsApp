<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVaultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vaults', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client')->unsigned()->index();
            $table->foreign('client')->references('bank_id')->on('banks')->onDelete('cascade');
            $table->string('counted');
            $table->string('counted_by');
            $table->string('counted_on');
            $table->string('currency');
            $table->string('denomination');
            $table->string('amount');
            $table->string('added_by');
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
        Schema::dropIfExists('vaults');
    }
}
