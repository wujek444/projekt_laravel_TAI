<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Roles;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'imie' => 'required|max:30',
            'nazwisko' => 'required|max:40',
            'email' => 'required|email|max:100|unique:users',
            'telefon' => 'required|max:12',
            'login' => 'required|max:20',
            'data_urodzenia' => 'required',
            'password' => 'required|min:6|confirmed',


        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
         $user =  User::create([
            'imie' => $data['imie'],
            'nazwisko' => $data['nazwisko'],
            'email' => $data['email'],
            'telefon' => $data['telefon'],
            'login' => $data['login'],
            'data_urodzenia' => $data['data_urodzenia'],
            'password' => bcrypt($data['password']),

        ]);
        $user->roles()->attach(2);//standard user
        return $user;

    }
}
