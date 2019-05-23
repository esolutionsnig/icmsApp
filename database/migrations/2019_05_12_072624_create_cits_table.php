<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cits', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('evacuation_id')->unsigned()->index();
            $table->foreign('evacuation_id')->references('id')->on('evacuation')->onDelete('cascade');
            $table->string('seal_number')->nullable();
            $table->integer('vehicle_id')->nullable();
            $table->string('cit_officer_id')->nullable();
            $table->string('delivery_status')->nullable();
            $table->string('added_on')->nullable();
            $table->string('added_by')->nullable();
            $table->string('picked_up_by')->nullable();
            $table->string('picked_up_on')->nullable();
            $table->string('received_by')->nullable();
            $table->string('received_on')->nullable();
            $table->string('bundle_confirmed')->default('NO');
            $table->string('bundle_confirmed_comment')->nullable();
            $table->string('bundle_confirmed_by')->nullable();
            $table->string('bundle_confirmed_on')->nullable();
            $table->string('bundle_confirmation_status')->nullable();
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
        Schema::dropIfExists('cits');
    }
}
