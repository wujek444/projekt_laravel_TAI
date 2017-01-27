<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolesHasUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles_has_users', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('users_id')->unsigned();//unsigned -> wartości dodatnie
            $table->integer('roles_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('roles_has_users', function(Blueprint $table){//alter
            $table->foreign('users_id')//klucz obcy o nazwie
                ->references('id')//odwołuje się do kolumny
                ->on('users');//w tabeli
        });

        Schema::table('roles_has_users', function(Blueprint $table){
            $table->foreign('roles_id')
            ->references('id')
                ->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles_has_users');
    }
}
