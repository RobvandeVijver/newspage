<?php

namespace App\Http\Controllers;

use App\Models\Home;


class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     */
    public function index()
    {
        return view('home.welcome', ['sorted'=>Home::information(), 'random'=>Home::random()]);
    }
}
