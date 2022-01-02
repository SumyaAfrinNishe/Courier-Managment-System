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
        return view('admin.layout.status.arrived-destination');
    } 
    public function totalpickup()
    {
        return view('admin.layout.status.total-pickup');
    } 
    public function totalshipped()
    {
        return view('admin.layout.status.total-shipped');
    } 
    public function totaldelieverd()
    {
        return view('admin.layout.status.total-delieverd');
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
