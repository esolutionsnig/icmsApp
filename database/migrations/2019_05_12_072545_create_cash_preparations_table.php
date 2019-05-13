<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashPreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_preparations', function (Blueprint $table) {
            $table->bigIncrements('er_id');
            $table->integer('client_id');
            $table->integer('ev_req_id')->unsigned()->index();
            $table->foreign('ev_req_id')->references('er_id')->on('bank_requests')->onDelete('cascade');
            $table->string('seal_number');
            $table->integer('container_type_id');
            $table->integer('category_id');
            $table->integer('currency_id');
            $table->string('cash_1000');
            $table->string('cash_1000_amount');
            $table->string('cash_500');
            $table->string('cash_500_amount');
            $table->string('cash_200');
            $table->string('cash_200_amount');
            $table->string('cash_100');
            $table->string('cash_100_amount');
            $table->string('cash_50');
            $table->string('cash_50_amount');
            $table->string('cash_20');
            $table->string('cash_20_amount');
            $table->string('cash_10');
            $table->string('cash_10_amount');
            $table->string('cash_5');
            $table->string('cash_5_amount');
            $table->string('cash_1');
            $table->string('total_amount');
            $table->string('client_rep');
            $table->string('is_deleted');
            $table->string('deleted_by');
            $table->string('deleted_on');
            $table->string('total_amount_bc');
            $table->string('is_bceed');
            $table->string('is_pickedup');
            $table->string('pickedup_by');
            $table->string('pickedup_on');
            $table->string('is_handed_over');
            $table->string('is_handed_over_by');
            $table->string('is_handed_over_on');
            $table->string('is_opened');
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
        Schema::dropIfExists('cash_preparations');
    }
}
