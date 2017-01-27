<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()//id
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validation
        $this->validate($request,[
            'imie'=> 'required',
            'nazwisko' => 'required',
            'email' => 'required',
            'telefon' => 'required',
            'data_urodzenia' => 'required',
        ]);

        $user = User::findOrFail($id);
        $user->imie = $request->input('imie');
        $user->nazwisko = $request->input('nazwisko');
        $user->email = $request->input('email');
        $user->telefon = $request->input('telefon');
        $user->data_urodzenia = $request->input('data_urodzenia');
        $user->save();

        return redirect()->route('/dane_uzytkownika')->with('user_update_message', 'Dane użytkownika zostały pomyślnie edytowane!');
//        $user = Auth::user();
//        $user->imie = $request->input('imie');
//        $user->nazwisko = $request->input('nazwisko');
//        $user->email = $request->input('email');
//        $user->telefon = $request->input('telefon');
//        $user->data_urodzenia = $request->input('data_urodzenia');
//        $user->save();
//        return view('/dane_uzytkownika')->with('user_update_message', 'Dane użytkownika zostały pomyślnie edytowane!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
