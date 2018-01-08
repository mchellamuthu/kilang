<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupPointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('skill_id')->unsigned();
            $table->integer('points');
            $table->integer('class_id')->unsigned();
            $table->integer('group_id')->unsigned();
            $table->integer('teacher_id')->unsigned();
            $table->string('notes')->nullable();
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
        Schema::dropIfExists('group_points');
    }
}
