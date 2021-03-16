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
<<<<<<< HEAD
    public function detail()
    {
        return view('page.detail_lomba');
    }
=======
    public function tentang()
    {
        return view('page.tentang');
    }

>>>>>>> 8c7b68e29fc72669c686a521a314838c15515370
}
