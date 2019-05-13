<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyRequestsBranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_requests_branches', function (Blueprint $table) {
            $table->bigIncrements('srb_id');
            $table->integer('sr_id')->unsigned()->index();
            $table->foreign('sr_id')->references('sr_id')->on('supply_requests')->onDelete('cascade');
            $table->integer('client');
            $table->integer('branch');
            $table->integer('currency');
            $table->integer('denomination');
            $table->integer('cash_category');
            $table->integer('amount');
            $table->integer('processed_amount');
            $table->string('requested_by');
            $table->string('requested_on');
            $table->string('is_deleted');
            $table->string('is_dispatchedOn');
            $table->string('is_dispatchedBy');
            $table->string('cit_officer');
            $table->string('cit_vehicle');
            $table->string('is_delivered');
            $table->string('is_deliveredOn');
            $table->string('is_deliveredBy');
            $table->string('is_received');
            $table->string('is_receivedOn');
            $table->string('is_receivedBy');
            $table->string('srb_status');
            $table->string('is_packed');
            $table->string('packed_by');
            $table->string('packed_on');
            $table->string('is_splitted');
            $table->string('seal_number');
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
        Schema::dropIfExists('supply_requests_branches');
    }
}
