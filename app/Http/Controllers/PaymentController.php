<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Braintree_ClientToken;
use Braintree_Transaction;

use Cart;
use Carbon\Carbon;
use ZipArchive;
use Auth;
use DB;
use App\Song;


class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $clientToken = Braintree_ClientToken::generate();
        //dd($clientToken);
        return view('payment.index',['clientToken' => $clientToken]);
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
        $nonceFromTheClient = $_POST["payment_method_nonce"];
        
        $result = Braintree_Transaction::sale([
          'amount' => Cart::total(),
          'paymentMethodNonce' => $nonceFromTheClient,
          'options' => [
            'submitForSettlement' => True
          ]
        ]);

        if ($result->success) 
        {
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

            //return response()->download($zipname);
            return redirect('/cart')->withSuccessMessage('Payment completed successfully.');
        } 
        else {
          print_r($result->errors);
        }
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
