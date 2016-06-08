<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Song;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Storage;

class SongController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $songs = Song::all();
        return view('song.index',['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('song.create');
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
        
        $this->validate($request, [
        'songTitle' => 'required',
        'artistId' => 'required',
        'albumId' => 'required',
        'genreId' => 'required',
        'price' => 'required',
        'songLocation' =>'required',
        ]); 

        $file = array('songLocation' => Input::file('songLocation'));
        $extension = Input::file('songLocation')->getClientOriginalExtension();
        $fileName = $request->get('songTitle').'.'.$extension;
        Input::file('songLocation')->move('song',$fileName);

        $song = new Song;

        $song->songTitle = $request->get('songTitle');
        $song->artistId = $request->get('artistId');
        $song->albumId = $request->get('albumId');
        $song->genreId = $request->get('genreId');
        $song->duration = $request->get('duration');
        $song->price = $request->get('price');
        $song->language = $request->get('language');
        $song->songLocation = $fileName;

        $song->save();

        return redirect('/song')->withSuccessMessage('Song data stored successfully.');
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
    public function edit($songId)
    {
        //
        $song = Song::find($songId);

        return view('song.edit',['song' => $song]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $songId)
    {
        //
       
        $song = Song::find($songId);
        $song->songTitle = $request->get('songTitle');
        $song->artistId = $request->get('artistId');
        $song->albumId = $request->get('albumId');
        $song->genreId = $request->get('genreId');
        $song->duration = $request->get('duration');
        $song->price = $request->get('price');
        $song->language = $request->get('language');

        $song->save();

        return redirect('/song')->withSuccessMessage('Song data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($songId)
    {
        //
        $song = Song::find($songId);

        $song->delete();
        return redirect('/song')->withSuccessMessage('Song data deleted successfully.');
    }
}
