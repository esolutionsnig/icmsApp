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
            $table->bigIncrements('id');
            $table->string('strim')->nullable();
            $table->string('sealing_title')->nullable();
            $table->string('client')->nullable();
            $table->string('location_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('container_id')->nullable();
            $table->string('currency_id')->nullable();
            $table->string('denomination_id')->nullable();
            $table->string('amount')->nullable();
            $table->string('seal_number')->nullable();
            $table->string('added_by')->nullable();
            $table->string('added_on')->nullable();
            $table->string('is_opened')->default('NO');
            $table->string('total_amount_allocated')->nullable();
            $table->string('total_processors')->nullable();
            $table->string('old_seal_number')->nullable();
            $table->string('seal_batch')->nullable();
            $table->string('total_amount_sealed')->nullable();
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
