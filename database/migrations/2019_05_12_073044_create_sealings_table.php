<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sealings', function (Blueprint $table) {
            $table->bigIncrements('s_id');
            $table->string('strim');
            $table->string('sealing_title');
            $table->string('client');
            $table->string('location_id');
            $table->string('category_id');
            $table->string('container_id');
            $table->string('currency_id');
            $table->string('denomination_id');
            $table->string('amount');
            $table->string('seal_number');
            $table->string('added_by');
            $table->string('added_on');
            $table->string('is_opened');
            $table->string('total_amount_allocated');
            $table->string('total_processors');
            $table->string('old_seal_number');
            $table->string('seal_batch');
            $table->string('total_amount_sealed');
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
        Schema::dropIfExists('sealings');
    }
}
