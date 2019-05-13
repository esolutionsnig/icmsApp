<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashAllocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cash_allocations', function (Blueprint $table) {
            $table->bigIncrements('ca_id');
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
            $table->string('returned_by');
            $table->string('returned_on');
            $table->string('ca_comment');
            $table->string('returned_user');
            $table->string('ca_shift');
            $table->string('is_fit');
            $table->string('is_unfit');
            $table->string('is_atm');
            $table->string('declared_value');
            $table->string('shortage');
            $table->string('comment');
            $table->string('evidence');
            $table->string('mixups');
            $table->string('m1000');
            $table->string('m500');
            $table->string('m200');
            $table->string('m100');
            $table->string('m50');
            $table->string('m20');
            $table->string('m10');
            $table->string('m5');
            $table->string('m1');
            $table->string('fake_notes');
            $table->string('fake_serial_numbers');
            $table->string('state_of_cash');
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
        Schema::dropIfExists('cash_allocations');
    }
}
