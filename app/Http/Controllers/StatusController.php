<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin.layout.status.out-delievery');
    } 
    public function intransit()
    {
        return view('admin.layout.status.in-transit');
    } 
}
