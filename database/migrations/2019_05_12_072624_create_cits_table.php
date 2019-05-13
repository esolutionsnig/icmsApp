<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('ev_req_id')->unsigned()->index();
            $table->foreign('ev_req_id')->references('er_id')->on('bank_requests')->onDelete('cascade');
            $table->string('seal_number');
            $table->integer('vehicle_id');
            $table->string('cit_officer_id');
            $table->string('delivery_status');
            $table->string('added_on');
            $table->string('added_by');
            $table->string('picked_up_by');
            $table->string('picked_up_on');
            $table->string('received_by');
            $table->string('received_on');
            $table->string('bundle_confirmed');
            $table->string('bundle_confirmed_comment');
            $table->string('bundle_confirmed_by');
            $table->string('bundle_confirmed_on');
            $table->string('bundle_confirmation_status');
            $table->string('old_seal_number');
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
        Schema::dropIfExists('cits');
    }
}
