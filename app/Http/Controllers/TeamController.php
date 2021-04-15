<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateTeamRequest;
use App\Http\Requests\UpdateTeamRequest;
use App\Teams;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Teams::all();
        return view('admin.team.index')->with('teams',$teams);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $teams = Teams::all();
        return view('admin.team.create')->with('teams',$teams);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateTeamRequest $request)
    {
        $image = $request->image->store('image_team');
        Teams::create([
            'name' => $request->name,
            'description' => $request->description,
            'title' => $request->title,
            'instagram' => $request->instagram,
            'image' => $image
        ]);
        session()->flash('success','Team Create Successfully');
        return redirect(route('team.index'));
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
    public function edit(Teams $team)
    {
        return view('admin.team.create')->with('team',$team);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTeamRequest $request, Teams $team)
    {
        $data = $request->only(['name','title','instagram','description']);
        if ($request->hasFile('image')) {
            $image = $request->image->store('image_team');
            $team->deleteImage();
            $data['image'] = $image;
        }
        $team->update($data);
        session()->flash('success','Team Updated Successfully');
        return redirect(route('team.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Teams $team)
    {
        // Storage::delete($lomba->image,$lomba->video);
        Storage::delete($team->image);
        $team->delete();
        session()->flash('success','Team Deleted Successfully');
        return redirect(route('team.index'));
        //
    }
}
