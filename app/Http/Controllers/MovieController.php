<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use app\Movie;

class MovieController extends Controller
{
    public function index(){

        $movies = Movie::limit(5)->orderBy('title')->where('nationality')->get();

        return view('movie', compact('movies'));
    }
}
