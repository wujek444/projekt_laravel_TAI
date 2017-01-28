<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Game;

class LibraryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show data
        $games = Game::all();
        return view('library.index', ['games' => $games]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create new data
        return view('library.create');
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
            'title'=>'required',
            'price_category'=>'required',
            'min_player_count'=>'required',
            'max_player_count'=>'required',
            //'description'=>'required', -> description not required
            //'genre'=>'required', -> genre not required
            //'link'=>'required', -> link not required
            //'img_src'=>'required', -> image source not required
            'state'=>'required',
        ]);
        //create new data
        $game = new game;
        $game->title = $request->title;
        $game->price_category = $request->price_category;
        $game->min_player_count = $request->min_player_count;
        $game->max_player_count = $request->max_player_count;
        $game->description = $request->description;
        $game->genre = $request->genre;
        $game->link = $request->link;
        $game->img_src = $request->img_src;
        $game->state = $request->state;
        $game->save();
        return redirect()->route('library.index')->with('alert-success','Gra została pomyślnie dodana do biblioteki!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $game = Game::findOrFail($id);
        return view('library.show', compact('game'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $game = Game::findOrFail($id);
        //return to the edit view
        return view('library.edit',compact('game'));
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
        //validation
        $this->validate($request,[
            'title'=>'required',
            'price_category'=>'required',
            'min_player_count'=>'required',
            'max_player_count'=>'required',
            //'description'=>'required', -> description not required
            //'genre'=>'required', -> genre not required
            //'link'=>'required', -> link not required
            //'img_src'=>'required', -> image source not required
            'state'=>'required',
        ]);
        $game = Game::findOrFail($id);
        $game->title = $request->title;
        $game->price_category = $request->price_category;
        $game->min_player_count = $request->min_player_count;
        $game->max_player_count = $request->max_player_count;
        $game->description = $request->description;
        $game->genre = $request->genre;
        $game->link = $request->link;
        $game->img_src = $request->img_src;
        $game->state = $request->state;
        $game->save();

        return redirect()->route('library.index')->with('alert-success','Dane gry zostały pomyślnie edytowane!');
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
        $game = Game::findOrFail($id);
        $game->delete();
        return redirect()->route('library.index')->with('alert-success','Dane gry zostały pomyślnie usunięte!');
    }
}
