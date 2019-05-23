<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThrownexceptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thrownexceptions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('bundleconfirmation_id')->unsigned()->index();
            $table->foreign('bundleconfirmation_id')->references('id')->on('bundleconfirmations')->onDelete('cascade');
            $table->string('seal_number')->nullable();
            $table->string('currency')->nullable();
            $table->string('denomination')->nullable();
            $table->integer('expected_Amount')->nullable();
            $table->integer('actual_amount')->nullable();
            $table->string('thrown_by')->nullable();
            $table->string('thrown_on')->nullable();
            $table->string('thrown_comment')->nullable();
            $table->string('thrown_to')->nullable();
            $table->string('reviewed_by')->nullable();
            $table->string('reviewed_on')->nullable();
            $table->string('reviewed_comment')->nullable();
            $table->string('ex_status')->nullable();
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
        Schema::dropIfExists('thrownexceptions');
    }
}
