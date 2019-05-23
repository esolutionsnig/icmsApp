<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDayshiftsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dayshifts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('dstart_title')->nullable();
            $table->string('dday')->nullable();
            $table->string('dshift')->nullable();
            $table->string('dstarted')->default('NO');
            $table->string('dstarted_by')->nullable();
            $table->string('dclosed')->default('NO');
            $table->string('dclosed_by')->nullable();
            $table->string('dclosed_on')->nullable();
            $table->string('dstatus')->nullable();
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
        Schema::dropIfExists('dayshifts');
    }
}
