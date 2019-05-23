<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBundleconfirmationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bundleconfirmations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bc_title');
            $table->integer('client_id')->unsigned()->index();
            $table->string('strim')->nullable();
            $table->integer('conslocation')->nullable();
            $table->string('audit_trail_number')->nullable();
            $table->string('added_by')->nullable();
            $table->string('confirmation_done')->nullable();
            $table->string('ended_on')->nullable();
            $table->string('reference_number')->nullable();
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
        Schema::dropIfExists('bundleconfirmations');
    }
}
