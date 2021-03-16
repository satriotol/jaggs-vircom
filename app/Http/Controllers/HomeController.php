<?php

namespace App\Http\Controllers;

use App\Jenjang;
use App\Kategori;
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
        $jenjangs = Jenjang::all();
        $kategoris = Kategori::all();
        return view('page.home')->with('lombas',$lombas)->with('jenjangs',$jenjangs)->with('kategoris',$kategoris);
    }
    public function detail()
    {
        return view('page.detail_lomba');
    }
    public function tentang()
    {
        return view('page.tentang');
    }
    public function kontak()
    {
        return view('page.kontak');
    }

}
