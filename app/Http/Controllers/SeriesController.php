<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeriesController extends Controller
{
    public function index(){
        $series = [ 
            'Grey\'s Anatomy',
            'Evangellion',
            'Rick and Morty'
        ];
        return view('series.index', [
            'series' => $series
            ]
        /*or compact('series') do php, escreve um array apartir de uma string*/);
    }
}
