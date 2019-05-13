<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashProcessingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_processings', function (Blueprint $table) {
            $table->bigIncrements('cp_id');
            $table->string('allocated_to');
            $table->string('workstation');
            $table->string('seal_number');
            $table->string('client_name');
            $table->string('audit_trail_number');
            $table->string('currency_id');
            $table->string('denomination_id');
            $table->string('amount_allocated');
            $table->string('allocated_by');
            $table->string('allocated_on');
            $table->string('amount_returned');
            $table->string('difference');
            $table->string('returned_by');
            $table->string('returned_on');
            $table->string('ca_comment');
            $table->string('returned_user');
            $table->string('ca_shift');
            $table->string('is_fit');
            $table->string('is_unfit');
            $table->string('is_atm');
            $table->string('is_fakenote');
            $table->string('shortage');
            $table->string('post_sorting_value');
            $table->string('declared_value');
            $table->string('counted_value');
            $table->string('comment');
            $table->string('evidens');
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
        Schema::dropIfExists('cash_processings');
    }
}
