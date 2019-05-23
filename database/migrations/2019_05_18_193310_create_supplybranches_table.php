<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSupplybranchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplybranches', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('supply_id')->unsigned()->index();
            $table->foreign('supply_id')->references('id')->on('supplies')->onDelete('cascade');
            $table->integer('client')->nullable();
            $table->integer('branch')->nullable();
            $table->integer('currency')->nullable();
            $table->integer('denomination')->nullable();
            $table->integer('cash_category')->nullable();
            $table->integer('amount')->default('0');
            $table->integer('processed_amount')->default('0');
            $table->string('requested_by')->nullable();
            $table->string('requested_on')->nullable();
            $table->string('is_deleted')->default('NO');
            $table->string('is_dispatchedOn');
            $table->string('is_dispatchedBy')->nullable();
            $table->string('cit_officer')->nullable();
            $table->string('cit_vehicle')->nullable();
            $table->string('is_delivered')->default('NO');
            $table->string('is_deliveredOn')->nullable();
            $table->string('is_deliveredBy')->nullable();
            $table->string('is_received')->default('NO');
            $table->string('is_receivedOn')->nullable();
            $table->string('is_receivedBy')->nullable();
            $table->string('srb_status')->nullable();
            $table->string('is_packed')->default('NO');
            $table->string('packed_by')->nullable();
            $table->string('packed_on')->nullable();
            $table->string('is_splitted')->default('NO');
            $table->string('seal_number')->nullable();
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
        Schema::dropIfExists('supplybranches');
    }
}
