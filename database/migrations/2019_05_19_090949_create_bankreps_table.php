<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankrepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bankreps', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('username');
            $table->integer('banks_id')->unsigned()->index();
            $table->foreign('banks_id')->references('id')->on('banks')->onDelete('cascade');
            $table->integer('branch_id');
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
        Schema::dropIfExists('bankreps');
    }
}
