<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateSubKategoriRequest;
use App\Kategori;
use Illuminate\Http\Request;

class SubKategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = Kategori::whereNotNull('parent_id')->get();
        return view('admin.subkategori.index')->with('kategoris',$category);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $subkategoris = Kategori::where('parent_id',null)->get();
        return view('admin.subkategori.create')->with('subkategoris',$subkategoris);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSubKategoriRequest $request)
    {
        Kategori::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id
        ]);
        session()->flash('success','Subcategory Create Successfully');
        return redirect(route('subkategori.index'));
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
    public function edit(Kategori $subkategori)
    {
        $subkategoris = Kategori::where('parent_id',null)->get();
        return view('admin.subkategori.create')->with('subkategori',$subkategori)->with('subkategoris',$subkategoris);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateSubKategoriRequest $request, Kategori $subkategori)
    {
        $subkategori->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
        ]);
        session()->flash('success','Sub Kategori Update Successfully');
        return redirect(route('subkategori.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kategori $subkategori)
    {
        if ($subkategori->lombasubkategori->count() >0) {
            session()->flash('error','Kategori cannot be deleted because it has some lomba.');
            return redirect()->back();
        }
        $subkategori->delete();
        session()->flash('success','Kategori Deleted Successfully');
        return redirect(route('subkategori.index'));
    }
}
