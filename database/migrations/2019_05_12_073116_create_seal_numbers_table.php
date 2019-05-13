<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSealNumbersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seal_numbers', function (Blueprint $table) {
            $table->bigIncrements('seal_id');
            $table->string('seal_number');
            $table->integer('container_type_id');
            $table->integer('deposit_type_id');
            $table->integer('category_id');
            $table->string('added_by');
            $table->string('is_deleted');
            $table->string('deleted_by');
            $table->string('deleted_on');
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
        Schema::dropIfExists('seal_numbers');
    }
}
