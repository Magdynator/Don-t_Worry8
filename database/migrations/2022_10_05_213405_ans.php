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
        Schema::create('ans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('team_id');
            $table->unsignedBigInteger('img_id');
            $table->string('masseges')->default('');
            $table->string('img')->default('');

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
