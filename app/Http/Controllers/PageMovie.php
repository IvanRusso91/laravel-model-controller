<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PageMovie extends Controller
{
    public function index(){
        return view('movie');
    }
}
