<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Requests;
use App\Song;
use Cart;
use ZipArchive;
use Auth;
use DB;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('cart.index');
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
        if (Cart::search(['id' => $request->songId])) {

            return redirect('/cart')->withSuccessMessage('Item is already in your cart!');
        }
        Cart::associate('Song','App')->add($request->songId, $request->songTitle, 1, $request->price);
        return redirect('/cart')->withSuccessMessage('Item added to your cart!');
        //return view('cart.index')->withSuccessMessage('Item added to your cart');
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

        //$zipname = 'etunes_song.zip';
        if(!Auth::check())
        {
            return redirect('/login');
        }

        $zipname = tempnam("tmp", "zip");
        $zip = new ZipArchive;
        //$zip->open($zipname, ZipArchive::CREATE);
        $zip->open($zipname, ZipArchive::CREATE);
        
        foreach (Cart::content() as $item)
        {
            $name = $item->song->songLocation;
            $path = public_path();
            $path = $path . '/song/'. $name;
            
            $zip->addFile($path);
        }

        $zip->close();

        $totalAmount = Cart::total();
        
        //return view('/payment',['totalAmount' => $totalAmount]);
        
        $userId = Auth::user()->memberId;
        $downloadCount = Auth::user()->rank + 1;

        DB::table('member')
            ->where('memberId', $userId)
            ->update(['rank' => $downloadCount]);

        foreach(Cart::content() as $item)
        {
            $songId = $item->song->songId;
             DB::table('sellHistory')->insert(
            ['memberId' => $userId, 'songId' => $songId,'sellDate' => Carbon::now()]
            );
        }

        Cart::destroy();

        return response()->download($zipname);

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
        Cart::remove($id);
        return redirect('/cart')->withSuccessMessage('Item has been removed!');
    }

    /*public function songDownload()
    {
        $path = $path . '/song/'.'8.mp3';

        return response()->download($path);
    }*/
}
