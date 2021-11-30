<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamgroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('teamgroups', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('teams_id');
             $table->foreign('teams_id')
                 ->references('id')
                 ->on('teams')
                 ->cascade('delete');
 
             // this does the same thing as the block below
             // $table->foreignId('book_id')->constrained();
             $table->unsignedBigInteger('groups_id');
             $table->foreign('groups_id')
                 ->references('id')
                 ->on('groups')
                 ->cascade('delete');
 
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
        Schema::dropIfExists('teamgroups');
    }
}
