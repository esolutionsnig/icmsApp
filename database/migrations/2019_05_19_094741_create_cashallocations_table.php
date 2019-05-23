<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCashallocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cashallocations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('allocated_to')->nullable();
            $table->string('workstation')->nullable();
            $table->string('seal_number')->nullable();
            $table->string('client_name')->nullable();
            $table->string('audit_trail_number')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('denomination_id')->nullable();
            $table->string('amount_allocated')->nullable();
            $table->string('allocated_by')->nullable();
            $table->string('allocated_on')->nullable();
            $table->string('amount_returned')->nullable();
            $table->string('returned_by')->nullable();
            $table->string('returned_on')->nullable();
            $table->string('ca_comment')->nullable();
            $table->string('returned_user')->nullable();
            $table->string('ca_shift')->default('0');
            $table->string('is_fit')->default('0');
            $table->string('is_unfit')->default('0');
            $table->string('is_atm')->default('0');
            $table->string('declared_value')->default('0');
            $table->string('shortage')->default('0');
            $table->string('comment')->nullable();
            $table->string('evidence')->nullable();
            $table->string('mixups')->nullable();
            $table->string('m1000')->default('0');
            $table->string('m500')->default('0');
            $table->string('m200')->default('0');
            $table->string('m100')->default('0');
            $table->string('m50')->default('0');
            $table->string('m20')->default('0');
            $table->string('m10')->default('0');
            $table->string('m5')->default('0');
            $table->string('m1')->default('0');
            $table->string('fake_notes')->nullable();
            $table->string('fake_serial_numbers')->nullable();
            $table->string('state_of_cash')->nullable();
            $table->string('old_seal_number')->nullable();
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
        Schema::dropIfExists('cashallocations');
    }
}
