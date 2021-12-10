<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGolfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('golfers', function (Blueprint $table) {
            $table->id();
            // TODO: connect id to backend, with the real golf data
            $table->string('name');
            $table->integer('score');
            $table->string('country');
            $table->integer('position');
            $table->integer('total_to_par');
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
        Schema::dropIfExists('golfers');
    }
}
