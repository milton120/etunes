<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Genre;

class GenreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $genres = Genre::all();
        return view('genre.index',['genres' => $genres]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('genre.create');
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
        'genreName' => 'required|unique:genre,genreName',
        ]);
        
        $genre = new Genre;
        $genre->genreName=$request->get('genreName');
        $genre->save();

        return redirect('/genre');
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
    public function edit($genreId)
    {
        //
        $genre = Genre::find($genreId);
        return view('genre.edit',['genre'=>$genre]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $genreId)
    {
        //
        $this->validate($request, [
        'genreName' => 'required|unique:genre,genreName,'.$genreId.',genreId',
        ]);

        $genre = Genre::find($genreId);
        $genre->genreName = $request->get('genreName');
        $genre->save();
        return redirect('/genre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($genreId)
    {
        //
        $genre = Genre::find($genreId);
        $genre->delete();
        return redirect('/genre')->with(['del_msg' => 'sucessfully deleted.']);
    }
}
