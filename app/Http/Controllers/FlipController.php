<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CoinFlip;
use App\CoinFlipsSeries;

class FlipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $flip = new CoinFlip;
        $flips = CoinFlip::all();
        return view('flip',compact('flip','flips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $flip = CoinFlip::flip();
        $flips = CoinFlip::all();
        return view('flip', compact('flip','flips'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(CoinFlip $coinFlip)
    {
        return view('show_flip', compact('coinFlip'));
    }

    public function makeseries(CoinFlip $coinFlip)
    {
        $result = $coinFlip->createSeries();
        if(!$result){
            dd('Already assigned to a series');
        }
        echo "success";
        // $coinFlipSeries = new CoinFlipSeries;
        // $coinFlipSeries->save();
        // $coinFlip->coinflipseries()->associate($coinFlipSeries);
        // $coinFlip->save();
    }

    // *
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
     
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
