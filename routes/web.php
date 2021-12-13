<?php

//frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\ShowBranchController;
//backend
use App\Http\Controllers\BranchController;
use App\Http\Controllers\AddBranchController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CourierRecordController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TrackListController;
use Illuminate\Support\Facades\Route;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('home',[HomeController::class,'home']);


Route::get('/admin', function ()
{
    return view ('master');
});
Route::get('/', function ()
{
    return view ('frontend.pages.home');
});
//frontend part
Route::get('/showbranch',[ShowBranchController::class, 'showbranch'])->name(name:'showbranch');

//dashboard
Route::get('/dashboard',[BookingController::class,'dashboard'])->name(name:'dashboard');

//Branch
Route::get('/admin/addbranch',[BranchController::class,'addbranch'])->name(name:'admin.add.branch');
Route::get('/admin/branchlist',[BranchController::class,'branchlist'])->name(name:'admin.branch.list');

Route::post('/admin/branchlist/create',[BranchController::class,'branchlistCreate'])->name(name:'admin.branch.list.create');

//Booking
Route::get('/admin/booking',[BookingController::class,'bookingadd'])->name(name:'admin.booking.add');
Route::get('/admin/courierrecord',[BookingController::class,'courierrecord'])->name(name:'admin.courier.record');

Route::post('/admin/courierrecord/create',[BookingController::class,'courierrecordCreate'])->name(name:'admin.courier.record.create');


//Status
Route::get('/admin/arriveddestination',[StatusController::class,'arriveddestination'])->name(name:'admin.arrived.destination');
Route::get('/admin/intransit',[StatusController::class,'intransit'])->name(name:'admin.in.transit');
Route::get('/admin/outdelievery',[StatusController::class,'outdelievery'])->name(name:'admin.out.delievery');
Route::get('/admin/totalcourier',[StatusController::class,'totalcourier'])->name(name:'admin.total.courier');
Route::get('/admin/totaldelieverd',[StatusController::class,'totaldelieverd'])->name(name:'admin.total.delieverd');
Route::get('/admin/totalpickup',[StatusController::class,'totalpickup'])->name(name:'admin.total.pickup');
Route::get('/admin/totalshipped',[StatusController::class,'totalshipped'])->name(name:'admin.total.shipped');


//Tracking
Route::get('/admin/status',[StatusController::class,'status'])->name(name:'admin.status');
Route::get('/admin/tracklist',[StatusController::class,'tracklist'])->name(name:'admin.track.list');

