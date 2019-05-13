<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalMovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internal_movements', function (Blueprint $table) {
            $table->bigIncrements('im_id');
            $table->string('source_location');
            $table->string('destination_location');
            $table->string('seal_number');
            $table->string('received_by');
            $table->string('received_on');
            $table->string('movement_status');
            $table->string('is_opened');
            $table->string('bc');
            $table->string('is_moved_out');
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
        Schema::dropIfExists('internal_movements');
    }
}
