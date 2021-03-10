<?php

namespace App\Http\Controllers;

use App\Jenjang;
use App\Kategori;
use App\Lomba;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $lombas = Lomba::all()->count();
        $jenjangs = Jenjang::all()->count();
        $kategoris = Kategori::all()->count();
        return view('admin.index')->with('kategoris',$kategoris)->with('lombas',$lombas)->with('jenjangs',$jenjangs);
    }
}
