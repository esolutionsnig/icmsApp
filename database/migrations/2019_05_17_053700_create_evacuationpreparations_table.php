<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvacuationpreparationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuationpreparations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id');
            $table->integer('evacuation_id')->unsigned()->index();
            $table->foreign('evacuation_id')->references('id')->on('evacuations')->onDelete('cascade');
            $table->string('seal_number');
            $table->integer('container_type_id');
            $table->integer('category_id');
            $table->integer('currency_id');
            $table->string('cash_1000')->nullable();
            $table->string('cash_1000_amount')->nullable();
            $table->string('cash_500')->nullable();
            $table->string('cash_500_amount')->nullable();
            $table->string('cash_200')->nullable();
            $table->string('cash_200_amount')->nullable();
            $table->string('cash_100')->nullable();
            $table->string('cash_100_amount')->nullable();
            $table->string('cash_50')->nullable();
            $table->string('cash_50_amount')->nullable();
            $table->string('cash_20')->nullable();
            $table->string('cash_20_amount')->nullable();
            $table->string('cash_10')->nullable();
            $table->string('cash_10_amount')->nullable();
            $table->string('cash_5')->nullable();
            $table->string('cash_5_amount')->nullable();
            $table->string('cash_1')->nullable();
            $table->string('total_amount')->nullable();
            $table->string('client_rep')->nullable();
            $table->string('is_deleted')->default('NO');
            $table->string('deleted_by')->nullable();
            $table->string('deleted_on')->nullable();
            $table->string('total_amount_bc')->default(0);
            $table->string('is_bceed')->default('NO');
            $table->string('is_pickedup')->default('NO');
            $table->string('pickedup_by')->nullable();
            $table->string('pickedup_on')->nullable();
            $table->string('is_handed_over')->default('NO');
            $table->string('is_handed_over_by')->nullable();
            $table->string('is_handed_over_on')->nullable();
            $table->string('is_opened')->default('NO');
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
        Schema::dropIfExists('evacuationpreparations');
    }
}
