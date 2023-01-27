<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\SubCategory;

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
        return view('home');
    }
    
    public function home1()
    {
        return view('home1');
    }

    public function daftar_index()
    {
        return view('daftar');
    }

    public function category_index()
    {
        return view('category');
    }

    public function getCategory($category_id)
    {
        $data = SubCategory::where('category_id',$category_id)->get();
        \Log::info($data);
        return response()->json(['data' => $data]);
    }

}
