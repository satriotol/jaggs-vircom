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
        $name = $request->input('name');
        $kategori = $request->input('kategori');
        $subkategori = $request->input('subkategori');
        $jenjang = $request->input('jenjang');

        $data = Lomba::whereHas('jenjang', function ($query) use ($jenjang) {
            if ($jenjang) {
                return $query->where('name', '=', $jenjang);
            }
        })->whereHas('kategori', function ($query) use ($kategori) {
            if ($kategori) {
                return $query->where('name', '=', $kategori);
            }
        })->whereHas('subkategori', function($query) use ($subkategori) {
            if ($subkategori) {
                return $query->where('name','=',$subkategori);
            }
        })->where('name', 'like', '%' . $name . '%')
            ->latest()->get();
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
