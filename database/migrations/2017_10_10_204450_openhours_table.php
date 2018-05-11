<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class OpenhoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('openhours', function (Blueprint $table) {
            $table->increments('id');
            $table->text('d1');
            $table->text('d2');
            $table->text('d3');
            $table->text('d4');
            $table->text('d5');
            $table->text('d6');
            $table->text('d7');
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
        Schema::dropIfExists('openhours');
    }
}
