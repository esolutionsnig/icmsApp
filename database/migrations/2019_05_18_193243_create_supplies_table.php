<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuppliesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('client_id')->unsigned()->index();
            $table->string('sr_title')->nullable();
            $table->string('sr_type')->nullable();
            $table->string('sr_date')->nullable();
            $table->string('sr_comment')->nullable();
            $table->string('requested_by')->nullable();
            $table->string('requested_on')->nullable();
            $table->string('sr_status')->nullable();
            $table->string('bp_done')->default('NO');
            $table->string('sr_slug')->nullable();
            $table->string('cit')->default('NO');
            $table->string('sr_verified');
            $table->string('verified_by')->nullable();
            $table->string('verified_on')->nullable();
            $table->string('verified_comment');
            $table->string('sr_approved')->default('NO');
            $table->string('approved_by')->nullable();
            $table->string('approved_on')->nullable();
            $table->string('approved_comment')->nullable();
            $table->string('dispatched_by')->nullable();
            $table->string('dispatched_on')->nullable();
            $table->string('sr_dispatch_comment')->nullable();
            $table->string('delivery_status')->nullable();
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
        Schema::dropIfExists('supplies');
    }
}
