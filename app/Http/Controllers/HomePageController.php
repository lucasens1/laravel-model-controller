<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;

class HomePageController extends Controller
{
    public function index(){
        $moviesList = Movie::all();
        /* dd($moviesList); */
        return view('home', compact('moviesList'));
    }
}
