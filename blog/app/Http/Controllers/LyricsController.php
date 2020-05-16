<?php

namespace App\Http\Controllers;

use App\Lyrics;
use Illuminate\Http\Request;

class LyricsController extends Controller
{

    function store(Request $request){

    }

    function update(Request $request){

    }

    function show_list(Request $request){
        return view('lyrics_list', ['data' => Lyrics::all()]);
    }

    function by_id(Request $request, $id){
        return view("lyrics_list", ['data'=>Lyrics::all()->random($id)]);
    }

    function search(Request $request){
        return view('lyrics_list', ['data' => Lyrics::all()->where('author', '=', $request->input('search-string'))]);
    }

}
