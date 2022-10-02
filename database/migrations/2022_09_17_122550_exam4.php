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
        Schema::create('exam4s', function (Blueprint $table) {
            $table->unsignedBigInteger('team_id');
            $table->string("first_question");
            $table->string("second_question");
            $table->string("third_question");
            $table->string("fourth_question");
            $table->integer("exam_4_point")->default('0');


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
