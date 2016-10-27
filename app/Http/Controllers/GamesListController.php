<?php
namespace App\Http\Controllers;

use App\Games;
use App\Http\Requests;
use Auth;
//use Illuminate\Http\Request;
use Request;
//use App\Http\Middleware\Auth;
use App\Http\Controllers\Controller;

class GamesListController extends Controller {

    public function index(){
        $games = \App\Games::latest()->get();
        return view('gameslist/index', compact('games'));
    }

    public function show($id){
        $games = Games::findOrFail($id);

        return view('gameslist/show', compact('games'));
    }

    public function create() {
        return view('gameslist/create');
    }

    public function store(Requests\AddGameRequest $request){

        $input = Request::all();

        Games::create($request->all());

       return redirect('games');

    }

    public function edit($id){

        $games = Games::findOrFail($id);
        return view ('gameslist.edit', compact('games'));
    }

    public function update($id, Requests\AddGameRequest $request){

        $games = Games::findOrFail($id);

        $games->update($request->all());

        return redirect('games');

    }


}