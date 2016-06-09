<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controler;

class MovieController extends Controller{
    
    //power our movies page
    function index(){
        $movies = \App\Movie::all();
        
        //echo'<pre>';
        //print_r($movies);
        //echo'</pre>';
        
        return view('movies.index', [ 'all_movies' => $movies ]);
    }
}