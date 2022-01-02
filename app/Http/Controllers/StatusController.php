<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CourierRecord;
class StatusController extends Controller
{
    public function totalcourier()
    {
        return view('admin.layout.status.total-courier');
    }
     public function arriveddestination()
    {
        $arrives=CourierRecord::where('status','Arrived at Destination')->get();
        return view('admin.layout.status.arrived-destination',compact('arrives'));
    } 
    public function totalpickup()
    {
        $pickups=CourierRecord::where('status','Picked Up')->get();
        return view('admin.layout.status.total-pickup',compact('pickups'));
    } 
    public function totalshipped()
    {
        $ships=CourierRecord::where('status','Shipped')->get();
        return view('admin.layout.status.total-shipped',compact('ships'));
    } 
    public function totaldelieverd()
    {
        $delievers=CourierRecord::where('status','Delievered')->get();
        return view('admin.layout.status.total-delieverd',compact('delievers'));
    } 
    public function outdelievery()
    {
        $outdelievers=CourierRecord::where('status','Out for delievery')->get();
        // dd($outdelievers);
        return view('admin.layout.status.out-delievery',compact('outdelievers'));
    } 
    public function intransit()
    {
        $intransits=CourierRecord::where('status','Intransit')->get();
        //dd($intransits);
            return view('admin.layout.status.in-transit',compact('intransits'));
    } 
}
