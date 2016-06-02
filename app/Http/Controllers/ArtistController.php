<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Artist;

class ArtistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $artists = Artist::all();
        return view('artist.index',['artists' => $artists]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('artist.create');
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
        'artistName' => 'required',
        'country' => 'required',
        'region' => 'required',
        ]);
        

        $artist = new Artist;
        $artist->artistName = $request->get('artistName');
        $artist->country = $request->get('country');
        $artist->region = $request->get('region');

        $artist->save();

        return redirect('/artist')->withSuccessMessage('Artist data stored Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($artistId)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($artistId)
    {
        //
        $artist = Artist::find($artistId);
        return view('artist.edit',['artist' =>$artist]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $artistId)
    {
        //

        $this->validate($request, [
        'artistName' => 'required',
        'country' => 'required',
        'region' => 'required',
        ]);

        $artist = Artist::find($artistId);
        $artist->artistName = $request->get('artistName');
        $artist->country = $request->get('country');
        $artist->region = $request->get('region');

        $artist->save();

        return redirect('/artist')->withSuccessMessage('Artist data Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($artistId)
    {
        //
        $artist = Artist::find($artistId);

        $artist->delete();

        return redirect('/artist')->withSuccessMessage('Artist data deleted Successfully.');
    }
}
