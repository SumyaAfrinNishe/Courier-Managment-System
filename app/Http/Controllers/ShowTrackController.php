<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourierRecord;
class ShowTrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //     public function showTrack()
    // {
    //     $trackings=CourierRecord::all();
    //     return view('frontend.pages.show-tracking',compact('trackings'));
    // }
    

    public function trackSearch()
 {
     $key= request()->search;
    //  dd($key);
     $trackings=CourierRecord::where('consignment_no','LIKE',"%{$key}%")->get();
    //  dd($trackings);
     return view('frontend.pages.show-tracking',compact('trackings'));
 }


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
