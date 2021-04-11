<?php

namespace App\Http\Controllers;

use App\Http\Resources\Lomba\LombaCollection;
use App\Lomba;
use Illuminate\Http\Request;

class ApiLombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = Lomba::all();
        if ($request->has('name')) {
            $data = Lomba::where('name', 'like' , '%'.$request->input('name').'%')->get();
            if (is_null($request->input('name'))) {
                return new LombaCollection($data);
            }
            return new LombaCollection($data);
        }
        if ($request->has('jenjang')) {
            $cari = $request->input('jenjang');
            $data = Lomba::whereHas('jenjang', function($query) use($cari){
                return $query->where('name', '=', $cari);
            })->get();
            if (is_null($request->input('kategori'))) {
                return new LombaCollection($data);
            }
            return new LombaCollection($data);
        }
        if ($request->has('kategori')) {
            $cari = $request->input('kategori');
            $data = Lomba::whereHas('kategori', function($query) use($cari){
                return $query->where('name', '=', $cari);
            })->get();
            if (is_null($request->input('kategori'))) {
                return new LombaCollection($data);
            }
            return new LombaCollection($data);
        }
        return new LombaCollection($data);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
    }

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
