<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::all()->count();
        return view('admin.index')->with('kategoris',$kategoris);
    }
}
