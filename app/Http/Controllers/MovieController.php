<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use app\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::all();

        return view('movie', compact('movies'));
    }
}
