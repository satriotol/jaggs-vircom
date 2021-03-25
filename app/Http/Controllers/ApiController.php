<?php

namespace App\Http\Controllers;

use App\Kategori;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function get_all_kategori(){
        return response()->json(Kategori::all(),200);
    }
}
