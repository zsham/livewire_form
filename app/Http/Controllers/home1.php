<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home1 extends Controller
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
    public function home1()
    {
        return view('home1');
    }
    
}
