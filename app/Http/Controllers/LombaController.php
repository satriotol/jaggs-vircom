<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateLombaRequest;
use App\Jenjang;
use App\Kategori;
use App\Lomba;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Inline\Element\Strong;

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
        if($request->image){
            $image = Storage::disk('public')->put('image',$request->image);
            // $image = $request->image->store('image');
        }else{
            $image =null;
        }
        if ($request->video) {
            $video = $request->video->store('video');
        }else{
            $video=null;
        }
        $lomba = Lomba::create([
            'name' => $request->name,
            'description' => $request->description,
            'kategori_id'=> $request->kategori_id,
            'image'=> $image,
            'video' => $video,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'link' => $request->link
        ]);
        if ($request->id_jenjang) {
            $lomba->jenjang()->attach($request->id_jenjang);
        }
        session()->flash('success','Lomba Create Successfully');
        return redirect(route('lomba.index'));
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
    public function edit(Lomba $lomba)
    {
        $kategoris = Kategori::all();
        $jenjangs = Jenjang::all();
        return view('admin.lomba.create')->with('lomba',$lomba)->with('jenjangs',$jenjangs)->with('kategoris',$kategoris);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateLombaRequest $request, Lomba $lomba)
    {
        $data =$request->only(['name','kategori_id','description','link','start_date','end_date']);
        if($request->hasFile('image')){
            $image = Storage::disk('public')->put('image',$request->image);
            // $image = $request->image->store('image');
            $lomba->deleteImage();
            $data['image'] = $image;
        }
        if($request->hasFile('video')){
            $video = $request->video->store('video');
            $lomba->deleteImage();
            $data['video'] = $video;
        }
        if($request->id_jenjang){
            $lomba->jenjang()->sync($request->id_jenjang);
        }
        $lomba->update($data);
        session()->flash('success','Lomba Updated Successfully');
        return redirect(route('lomba.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lomba $lomba)
    {
        Storage::delete($lomba->image,$lomba->video);
        $lomba->delete();
        session()->flash('success','Lomba Deleted Successfully');
        return redirect(route('lomba.index'));
    }
}
