<?php

namespace App\Http\Controllers;

use App\Http\Resources\KategoriCollection;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $kategoris = Kategori::all();
    //     return response()->json($kategoris,200);
    // }
    public function index(Request $request)
    {
        $kategoris = Kategori::all();
        if ($request->has('name')) {
            $data = Kategori::where('name', 'like', '%'.$request->input('name').'%')->get();
            return new KategoriCollection($data);
        }
        return new KategoriCollection($kategoris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Kategori $kategori)
    {
        // $kategori = Kategori::findOrFail($id);
        return response()->json($kategori,200);

    }
    // public function search(Request $request, $kategori)
    // {
    //     return response()->json(['data'=>$kategori],200);

    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
