<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->integer('game_1')->default('0');;
            $table->integer('game_2')->default('0');;
            $table->integer('game_3')->default('0');;
            $table->integer('game_4')->default('0');;
            $table->integer('game_5')->default('0');;
            $table->integer('game_6')->default('0');;
            $table->integer('game_7')->default('0');;
            $table->integer('game_8')->default('0');;
            $table->integer('game_9')->default('0');;
            $table->integer('total_games_point')->default('0');

            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
