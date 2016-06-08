<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Song;
use DB;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$songs = Song::all();
        $songs = DB::table('song')
            ->join('album', 'song.albumId', '=', 'album.albumId')
            ->join('artist', 'song.artistId', '=', 'artist.artistId')
            ->join('genre', 'song.genreId', '=', 'genre.genreId')
            ->select('song.*','album.albumName', 'artist.artistName', 'genre.genreName')
            ->get();

        return view('store.index',['songs' => $songs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($songId)
    {
        //
        //$song = Song::find($songId);
        $song = DB::table('song')
            ->join('album', 'song.albumId', '=', 'album.albumId')
            ->join('artist', 'song.artistId', '=', 'artist.artistId')
            ->join('genre', 'song.genreId', '=', 'genre.genreId')
            ->select('song.*','album.*', 'artist.artistName', 'genre.genreName')
            ->where('song.songId', '=', $songId)
            ->get();

        return view('store.show',['song' => $song]);
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
