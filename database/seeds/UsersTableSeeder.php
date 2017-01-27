<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->imie='admin';
        $user->nazwisko='admin';
        $user->email='admin@gmail.com';
        $user->telefon='007007007';
        $user->login='admin';
        $user->data_urodzenia='1995-03-21';
        $user->password = bcrypt('admin1234');
        $user->save();
        $user->roles()->attach(1);//admin

        $user = new User();
        $user->imie='user';
        $user->nazwisko='standard';
        $user->email='user@gmail.com';
        $user->telefon='666666';
        $user->login='standard_user';
        $user->data_urodzenia='1995-05-03';
        $user->password = bcrypt('user1234');
        $user->save();
        $user->roles()->attach(2);//standard user

    }
}
