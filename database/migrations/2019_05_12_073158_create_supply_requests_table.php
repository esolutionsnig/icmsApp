<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplyRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supply_requests', function (Blueprint $table) {
            $table->bigIncrements('sr_id');
            $table->integer('client')->unsigned()->index();
            $table->foreign('client')->references('bank_id')->on('banks')->onDelete('cascade');
            $table->string('sr_title');
            $table->string('sr_type');
            $table->string('sr_date');
            $table->string('sr_comment');
            $table->string('requested_by');
            $table->string('requested_on');
            $table->string('sr_status');
            $table->string('bp_done');
            $table->string('sr_slug');
            $table->string('cit');
            $table->string('sr_verified');
            $table->string('verified_by');
            $table->string('verified_on');
            $table->string('verified_comment');
            $table->string('sr_approved');
            $table->string('approved_by');
            $table->string('approved_on');
            $table->string('approved_comment');
            $table->string('dispatched_by');
            $table->string('dispatched_on');
            $table->string('sr_dispatch_comment');
            $table->string('delivery_status');
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
        Schema::dropIfExists('supply_requests');
    }
}
