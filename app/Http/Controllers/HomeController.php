<?php

namespace App\Http\Controllers;

use App\Companys;
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
    public function detail(Lomba $lomba)
    {
        return view('page.detail_lomba')->with('lomba',$lomba);
    }
    public function tentang()
    {
        $lomba = Lomba::all()->count();
        $company = Companys::where('id',1)->first();
        return view('page.tentang')->with('lomba',$lomba)->with('company',$company);
    }
    public function kontak()
    {
        $company = Companys::where('id',1)->first();
        return view('page.kontak')->with('company',$company);
    }

}
