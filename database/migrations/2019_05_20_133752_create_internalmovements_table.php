<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInternalmovementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internalmovements', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('source_location')->nullable();
            $table->string('destination_location')->nullable();
            $table->string('seal_number')->nullable();
            $table->string('received_by')->nullable();
            $table->string('received_on')->nullable();
            $table->string('movement_status')->nullable();
            $table->string('is_opened')->default('NO');
            $table->string('bc')->default('NO');
            $table->string('is_moved_out')->default('NO');
            $table->string('added_by')->nullable();
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
        Schema::dropIfExists('internalmovements');
    }
}
