<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
  /*
  // Middleware spostato direttamente nel file web.php
    public function __construct()
    {
        $this->middleware('auth');
    }
  */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('guest.welcome');
    }
}
