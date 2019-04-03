<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SavedCars;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $interior = '#000000';
        $exterior = '#ff0000';
        $type = 'CAR';
        $SavedCars = SavedCars::where('user_id', '=', \Auth::user()->id)->get();
        return view('home')->with('interior', $interior)->with('exterior', $exterior)->with('type', $type)->with('SavedCars', $SavedCars);
    }
}
