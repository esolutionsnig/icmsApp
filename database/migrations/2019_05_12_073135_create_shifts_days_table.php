<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsDaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shifts_days', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('day_id');
            $table->string('stitle');
            $table->string('sshift');
            $table->string('sstarted');
            $table->string('sstarted_by');
            $table->string('sstarted_on');
            $table->string('sclosed');
            $table->string('sclosed_by');
            $table->string('sclosed_on');
            $table->string('sstatus');
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
        Schema::dropIfExists('shifts_days');
    }
}
