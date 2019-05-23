<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShiftsdaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shiftsdays', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('day_id')->nullable();
            $table->string('stitle')->nullable();
            $table->string('sshift')->nullable();
            $table->string('sstarted')->default('NO');
            $table->string('sstarted_by')->nullable();
            $table->string('sstarted_on')->nullable();
            $table->string('sclosed')->default('NO');
            $table->string('sclosed_by')->nullable();
            $table->string('sclosed_on')->nullable();
            $table->string('sstatus')->nullable();
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
        Schema::dropIfExists('shiftsdays');
    }
}
