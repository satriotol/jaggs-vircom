<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateKategoriRequest;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategoris = Kategori::all();
        return view('admin.kategori.index')->with('kategoris',$kategoris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateKategoriRequest $request)
    {
        Kategori::create([
            'name' => $request->name,
        ]);
        session()->flash('success','Category Create Successfully');
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
    public function edit(Kategori $kategori)
    {
        return view('admin.kategori.create')->with('kategori',$kategori);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateKategoriRequest $request, Kategori $kategori)
    {
        $kategori->update([
            'name' => $request->name
        ]);
        session()->flash('success','Kategori Update Successfully');
        return redirect(route('kategori.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $kategori)
    {
        if ($kategori->lomba->count() >0) {
            session()->flash('error','Kategori cannot be deleted because it has some lomba.');
            return redirect()->back();
        }
        $kategori->delete();
        session()->flash('success','Kategori Deleted Successfully');
        return redirect(route('kategori.index'));
    }
}
