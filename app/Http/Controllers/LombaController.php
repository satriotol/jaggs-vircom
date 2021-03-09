<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLombaRequest;
use App\Jenjang;
use App\Kategori;
use App\Lomba;
use Illuminate\Http\Request;

class LombaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lombas=Lomba::all();
        return view('admin.lomba.index')->with('lombas',$lombas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategoris = Kategori::all();
        $jenjangs = Jenjang::all();
        return view('admin.lomba.create')->with('jenjangs',$jenjangs)->with('kategoris',$kategoris);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateLombaRequest $request)
    {
        // $image = $request->image->store('image');
        // $video = $request->video->store('video');
        $lomba = Lomba::create([
            'name' => $request->name,
            'description' => $request->description,
            'id_kategori'=> $request->id_kategori,
            'image'=> $request->image->store('image'),
            'video' => $request->video->store('video'),
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'link' => $request->link
        ]);
        if ($request->id_jenjang) {
            $lomba->jenjang()->attach($request->id_jenjang);
        }
        // if ($request->image) {
        //     $lomba->$request->image->store('image');
        // }
        // if ($request->video) {
        //     $lomba->$request->video->store('video');
        // }
        session()->flash('success','Post Create Successfully');
        return redirect(route('kategori.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
