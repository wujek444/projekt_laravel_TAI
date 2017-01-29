<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArchivalRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('archival_rents', function (Blueprint $table) {
            $table->increments('id');//id of rent
            $table->integer('game_id');//foreign key to the games table
            $table->integer('user_id');//foreign key to the users table
            $table->integer('duration');//rent duration (in days)
            $table->float('rent_value');//total value of rent
            $table->date('rent_date');
            $table->date('return_date');
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
        Schema::dropIfExists('archival_rents');
    }
}
