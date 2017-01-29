<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        $messages = Message::all();
        return view('messages.index', ['messages' => $messages]);
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
        //validation
        $this->validate($request,[
            'kontakt_imieNazwisko'=>'required',
            'kontakt_email'=>'required',
            'kontakt_wiadomosc'=>'required',

        ]);
        //create new data
        $message = new message;
        $message->kontakt_imieNazwisko = $request->kontakt_imieNazwisko;
        $message->kontakt_email = $request->kontakt_email;
        $message->kontakt_wiadomosc = $request->kontakt_wiadomosc;
        $message->save();
        return redirect()->route('/index')->with('alert-success','Wiadomość została wysłana!');
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
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //delete data
        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('messages.index')->with('alert-success','Wiadomość została usunięta!');
    }
}
