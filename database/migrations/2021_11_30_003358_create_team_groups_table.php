<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
         Schema::create('team_groups', function (Blueprint $table) {
             $table->id();
             $table->unsignedBigInteger('team_id');
             $table->foreign('team_id')
                 ->references('id')
                 ->on('teams')
                 ->cascade('delete');

             // this does the same thing as the block below
             // $table->foreignId('book_id')->constrained();
             $table->unsignedBigInteger('group_id');
             $table->foreign('group_id')
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
        Schema::dropIfExists('team_groups');
    }
}
