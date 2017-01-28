<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->integer('price_category');
            $table->integer('min_player_count');
            $table->integer('max_player_count');
            $table->text('description');
            $table->string('genre');
            $table->string('link');
            $table->string('img_src');
            $table->boolean('state');//1-avaliable | 0-unavaliable(rent)
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
        Schema::dropIfExists('games');
    }
}
