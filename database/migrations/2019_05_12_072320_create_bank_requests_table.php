<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBankRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bank_requests', function (Blueprint $table) {
            $table->bigIncrements('er_id');
            $table->string('er_name');
            $table->integer('bank_id')->unsigned()->index();
            $table->foreign('bank_id')->references('bank_id')->on('banks')->onDelete('cascade');
            $table->integer('branch_id');
            $table->string('location_code');
            $table->string('consignment_location_id');
            $table->string('cit_reciever_id');
            $table->string('cit_confirmation_token');
            $table->string('vehicle_id');
            $table->string('cit');
            $table->string('cit_confirmation');
            $table->string('cit_confirmation_date');
            $table->string('client_rep');
            $table->string('cp_done');
            $table->string('er_status');
            $table->string('preannounced');
            $table->string('date_execution');
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
        Schema::dropIfExists('bank_requests');
    }
}
