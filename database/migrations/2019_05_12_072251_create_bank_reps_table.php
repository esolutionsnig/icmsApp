<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankRepsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_reps', function (Blueprint $table) {
            $table->bigIncrements('br_id');
            $table->string('username');
            $table->integer('branch_id')->unsigned()->index();
            $table->foreign('branch_id')->references('branch_id')->on('bank_branches')->onDelete('cascade');
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
        Schema::dropIfExists('bank_reps');
    }
}
