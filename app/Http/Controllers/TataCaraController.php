<?php

namespace App\Http\Controllers;

use App\Http\Requests\Tatacara\CreateTataCaraRequest;
use App\Http\Requests\Tatacara\UpdateTataCaraRequest;
use App\tata_cara;
use Illuminate\Http\Request;

class TataCaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tatacaras = tata_cara::all();
        return view('admin.tatacara.index')->with('tatacaras', $tatacaras);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.tatacara.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTataCaraRequest $request)
    {
        tata_cara::create([
            'description' => $request->description
        ]);
        session()->flash('success','Tata Cara Create Successfully');
        return redirect(route('tatacara.index'));
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
    public function edit(tata_cara $tatacara)
    {
        return view('admin.tatacara.create')->with('tatacara',$tatacara);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTataCaraRequest $request, tata_cara $tatacara)
    {
        $data = $request->only(['description']);
        $tatacara->update($data);
        session()->flash('success','Tata Cara Updated Successfully');
        return redirect(route('tatacara.index'));


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(tata_cara $tatacara)
    {
        $tatacara->delete();
        session()->flash('success','Tata Cara Deleted Successfully');
        return redirect(route('tatacara.index'));
    }
}
