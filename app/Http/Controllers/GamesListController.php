<?php
namespace App\Http\Controllers;

use App\Games;
use App\Http\Requests;

//use Illuminate\Http\Request;
use Request;
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

    public function store(){

        $input = Request::all();

        Games::create($input);

        return redirect('games');

    }


}