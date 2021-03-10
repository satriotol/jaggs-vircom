<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateJenjangRequest;
use App\Jenjang;
use Illuminate\Http\Request;

class JenjangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenjangs = Jenjang::all();
        return view('admin.jenjang.index')->with('jenjangs',$jenjangs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.jenjang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateJenjangRequest $request)
    {
        Jenjang::create([
            'name' => $request->name,
        ]);
        session()->flash('success','Category Create Successfully');
        return redirect(route('jenjang.index'));
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
    public function edit(Jenjang $jenjang)
    {
        return view('admin.jenjang.create')->with('jenjang',$jenjang);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateJenjangRequest $request, Jenjang $jenjang)
    {
        $jenjang->update([
            'name' => $request->name
        ]);
        session()->flash('success','Jenjang Update Successfully');
        return redirect(route('jenjang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Jenjang $jenjang)
    {
        if ($jenjang->lomba->count() >0) {
            session()->flash('error','Jenjang cannot be deleted because it has some lomba.');
            return redirect()->back();
        }
        $jenjang->delete();
        session()->flash('success','Jenjang Deleted Successfully');
        return redirect(route('jenjang.index'));
    }
}
