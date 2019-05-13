<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleConfirmationStartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundle_confirmation_starts', function (Blueprint $table) {
            $table->bigIncrements('bcs_id');
            $table->string('bc_title');
            $table->integer('client_id')->unsigned()->index();
            $table->foreign('client_id')->references('bank_id')->on('banks')->onDelete('cascade');
            $table->string('strim');
            $table->integer('conslocation');
            $table->string('audit_trail_number');
            $table->string('added_by');
            $table->string('confirmation_done');
            $table->string('ended_on');
            $table->string('reference_number');
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
        Schema::dropIfExists('bundle_confirmation_starts');
    }
}
