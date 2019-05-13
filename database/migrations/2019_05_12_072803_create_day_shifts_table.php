<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayShiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('day_shifts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dstart_title');
            $table->string('dday');
            $table->string('dshift');
            $table->string('dstarted');
            $table->string('dstarted_by');
            $table->string('dclosed');
            $table->string('dclosed_by');
            $table->string('dclosed_on');
            $table->string('dstatus');
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
        Schema::dropIfExists('day_shifts');
    }
}
