<?php

//frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\ShowBranchController;
use App\Http\Controllers\frontend\InformationController;
//backend
use App\Http\Controllers\AdminController;
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
Route::get('/home',[HomeController::class, 'home'])->name(name:'home');
Route::get('/showbranch',[ShowBranchController::class, 'showbranch'])->name(name:'showbranch');

Route::get('/information',[InformationController::class, 'information'])->name(name:'information');
Route::get('/admin/customerinfo',[BookingController::class,'customerinfo'])->name(name:'admin.customer.info');
Route::post('/admin/customerinfo/create',[InformationController::class,'customerinfoCreate'])->name(name:'admin.customer.create');



//login and registration
Route::get('/registration',[LoginController::class,'registration'])->name(name:'registration');
Route::post('/registration/store',[LoginController::class,'registrationstore'])->name(name:'registration.store');
Route::get('/login',[LoginController::class,'login'])->name(name:'login');
Route::post('/do/login',[LoginController::class,'doLogin'])->name(name:'doLogin');
Route::get('/logout',[LoginController::class,'logout'])->name('logout');


Route::group(['prefix'=>'admin'],function (){

    Route::get('/admin/login',[AdminController::class,'login'])->name('admin.login');
    Route::post('/admin/do/login',[AdminController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['middleware'=>'auth'],function (){
    Route::get('/admin', function () {
        return view('admin.partial.home');
    })->name('admin.home');

    Route::get('admin/logout',[AdminController::class,'logout'])->name('admin.logout');

//dashboard
Route::get('/dashboard',[BookingController::class,'dashboard'])->name(name:'dashboard');


//Branch
Route::get('/admin/addbranch',[BranchController::class,'addbranch'])->name(name:'admin.add.branch');
Route::get('/admin/branchlist',[BranchController::class,'branchlist'])->name(name:'admin.branch.list');
Route::post('/admin/branchlist/create',[BranchController::class,'branchlistCreate'])->name(name:'admin.branch.list.create');
Route::get('/admin/branchdetails/view/{branch_id}',[BranchController::class,'branchdetails'])->name(name:'admin.branchdetails.view');
Route::get('/admin/branchdetails/delete/{branch_id}',[BranchController::class,'branchdelete'])->name(name:'admin.branchdetails.delete');


//Customer and Booking


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
    });
});