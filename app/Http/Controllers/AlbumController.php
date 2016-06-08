<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Album;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Storage;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $albums = Album::all();
        return view('album.index',['albums' => $albums]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('album.create');
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
        'albumName' => 'required',
        'artistId' => 'required',
        'companyId' => 'required',
        'albumGenre' => 'required',
        'releaseDate' => 'required',
        'image' => 'required',
        ]);

        $file = array('image' => Input::file('image'));
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = $request->get('albumName').'.'.$extension;
        Input::file('image')->move('image',$fileName);

        
        $album = new Album;

        $album->albumName = $request->get('albumName');
        $album->artistId = $request->get('artistId');
        $album->companyId = $request->get('companyId');
        $album->albumGenre = $request->get('albumGenre');
        $album->releaseDate = $request->get('releaseDate');
        $album->albumDownloads = 0;
        $album->imageLocation = $fileName;

        //dd($album);

        $album->save();

        return redirect('/album')->withSuccessMessage('Album Stored Successfully.');
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
        /*$path = public_path();
        $path = $path . '/image/'.'milton.jpg';

        return response()->download($path); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($albumId)
    {
        //
        $album = Album::find($albumId);

        return view('album.edit',['album' => $album]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $albumId)
    {
        //

        $this->validate($request, [
        'albumName' => 'required',
        'artistId' => 'required',
        'companyId' => 'required',
        'albumGenre' => 'required',
        'releaseDate' => 'required',
        ]);

        $album = Album::find($albumId);

        $album->albumName = $request->get('albumName');
        $album->artistId = $request->get('artistId');
        $album->companyId = $request->get('companyId');
        $album->albumGenre = $request->get('albumGenre');
        $album->releaseDate = $request->get('releaseDate');

        $album->save();

        return redirect('/album')->withSuccessMessage('Album Data Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($albumId)
    {
        //
        $album = Album::find($albumId);
        $album->delete();

        return redirect('/album')->withSuccessMessage('Album Deleted Successfully.');
    }
}
