<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleConfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_confirmations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bcs_id')->unsigned()->index();
            $table->foreign('bcs_id')->references('bcs_id')->on('bundle_confirmation_starts')->onDelete('cascade');
            $table->integer('client');
            $table->integer('branch');
            $table->string('seal_number');
            $table->string('currency');
            $table->string('d1000');
            $table->string('d1000_category');
            $table->string('d1000_amount');
            $table->string('d500');
            $table->string('d500_category');
            $table->string('d500_amount');
            $table->string('d200');
            $table->string('d200_category');
            $table->string('d200_amount');
            $table->string('d100');
            $table->string('d100_category');
            $table->string('d100_amount');
            $table->string('d50');
            $table->string('d50_category');
            $table->string('d50_amount');
            $table->string('d20');
            $table->string('d20_category');
            $table->string('d20_amount');
            $table->string('d10');
            $table->string('d10_category');
            $table->string('d10_amount');
            $table->string('d5');
            $table->string('d5_category');
            $table->string('d5_amount');
            $table->string('d1');
            $table->string('d1_category');
            $table->string('d1_amount');
            $table->string('amount');
            $table->string('added_by');
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
        Schema::dropIfExists('bundle_confirmations');
    }
}
