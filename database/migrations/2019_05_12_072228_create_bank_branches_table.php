<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_branches', function (Blueprint $table) {
            $table->bigIncrements('branch_id');
            $table->integer('bank_id')->unsigned()->index();
            $table->foreign('bank_id')->references('bank_id')->on('banks')->onDelete('cascade');
            $table->string('branch_location');
            $table->string('branch_location_code');
            $table->string('branch_cmu');
            $table->string('branch_rep');
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
        Schema::dropIfExists('bank_branches');
    }
}
