<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActiveRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('active_rents', function (Blueprint $table) {
            $table->increments('id');//id of rent
            $table->integer('game_id');//foreign key to the games table
            $table->integer('user_id');//foreign key to the users table
            $table->integer('duration');//rent duration (in days)
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
        Schema::dropIfExists('active_rents');
    }
}
