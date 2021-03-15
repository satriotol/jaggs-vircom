<?php

namespace App\Http\Controllers;

use App\Lomba;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $lombas = Lomba::all();
        return view('page.home')->with('lombas',$lombas);
    }
}
