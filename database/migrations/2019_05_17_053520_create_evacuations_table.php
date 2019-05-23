<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEvacuationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('evacuations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('er_name');
            $table->integer('bank_id');
            $table->integer('branch_id');
            $table->string('location_code')->nullable();
            $table->string('consignment_location_id')->nullable();
            $table->string('cit_reciever_id')->nullable();
            $table->string('cit_confirmation_token')->nullable();
            $table->string('vehicle_id')->nullable();
            $table->string('cit')->default('NO');
            $table->string('cit_confirmation')->nullable();
            $table->string('cit_confirmation_date')->nullable();
            $table->string('client_rep')->nullable();
            $table->string('cp_done')->default('NO');
            $table->string('er_status')->nullable();
            $table->string('preannounced')->default('NO');
            $table->string('date_execution')->nullable();
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
        Schema::dropIfExists('evacuations');
    }
}
