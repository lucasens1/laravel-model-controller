<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomePageController extends Controller
{
    public function index(){
        /* Query per tutti */
        $moviesList = Movie::all();
        /* Query per voto >= 8 */
        /* $moviesList = Movie::where('vote', '>=', 8)->get(); */
        /* Query per Nazionalità */
        /* $moviesList = Movie::where('nationality','american/british')->get(); */
        /* Query per film in ordine decrescente dal voto */
        /* $moviesList = Movie::orderByDesc('vote')->get(); */
        /* Query per film che iniziano per P */
        /* $moviesList = Movie::where('title','Like','p%')->get(); */
        /* dd($moviesList); */
        return view('home', compact('moviesList'));
    }
}
