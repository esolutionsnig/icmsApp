<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleconfirmationbagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundleconfirmationbags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bundleconfirmation_id')->unsigned()->index();
            $table->foreign('bundleconfirmation_id')->references('id')->on('bundleconfirmations')->onDelete('cascade');
            $table->integer('client')->nullable();
            $table->integer('branch')->nullable();
            $table->string('seal_number')->nullable();
            $table->string('currency')->nullable();
            $table->string('d1000')->nullable();
            $table->string('d1000_category')->nullable();
            $table->string('d1000_amount')->nullable();
            $table->string('d500')->nullable();
            $table->string('d500_category')->nullable();
            $table->string('d500_amount')->nullable();
            $table->string('d200')->nullable();
            $table->string('d200_category')->nullable();
            $table->string('d200_amount')->nullable();
            $table->string('d100')->nullable();
            $table->string('d100_category')->nullable();
            $table->string('d100_amount')->nullable();
            $table->string('d50')->nullable();
            $table->string('d50_category')->nullable();
            $table->string('d50_amount')->nullable();
            $table->string('d20')->nullable();
            $table->string('d20_category')->nullable();
            $table->string('d20_amount')->nullable();
            $table->string('d10')->nullable();
            $table->string('d10_category')->nullable();
            $table->string('d10_amount')->nullable();
            $table->string('d5')->nullable();
            $table->string('d5_category')->nullable();
            $table->string('d5_amount')->nullable();
            $table->string('d1')->nullable();
            $table->string('d1_category')->nullable();
            $table->string('d1_amount')->nullable();
            $table->integer('amount')->default('0');
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('bundleconfirmationbags');
    }
}
