<?php

//frontend
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\LoginController;
use App\Http\Controllers\ShowBranchController;
use App\Http\Controllers\frontend\InformationController;
//backend
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StaffController;
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
Route::get('/dashboard',[DashboardController::class,'dashboard'])->name(name:'dashboard');


//Branch
Route::get('/addbranch',[BranchController::class,'addbranch'])->name(name:'admin.add.branch');
Route::get('/branchlist',[BranchController::class,'branchlist'])->name(name:'admin.branch.list');
Route::post('/branchlist/create',[BranchController::class,'branchlistCreate'])->name(name:'admin.branch.list.create');
Route::get('/branchdetails/view/{branch_id}',[BranchController::class,'branchdetails'])->name(name:'admin.branchdetails.view');
Route::get('/branchdetails/delete/{branch_id}',[BranchController::class,'branchdelete'])->name(name:'admin.branchdetails.delete');
Route::get('/branchedit/{branch_id}',[BranchController::class,'branchEdit'])->name('admin.branch.edit');
Route::put('/branchupdate/{branch_id}',[BranchController::class,'branchUpdate'])->name('admin.branch.update');
Route::get('/branch/search',[BranchController::class,'branchSearch'])->name('admin.branch.search');

//Customer and Booking


//Booking
Route::get('/booking',[BookingController::class,'bookingadd'])->name(name:'admin.booking.add');
Route::get('/courierrecord',[BookingController::class,'courierrecord'])->name(name:'admin.courier.record');
Route::post('/courierrecord/create',[BookingController::class,'courierrecordCreate'])->name(name:'admin.courier.record.create');
Route::get('/bookingdetails/view/{book_id}',[BookingController::class,'bookingdetails'])->name(name:'admin.bookingdetails.view');
Route::get('/bookingdetails/delete/{book_id}',[BookingController::class,'bookingdelete'])->name(name:'admin.bookingdetails.delete');
Route::get('/bookingedit/{book_id}',[BookingController::class,'bookingEdit'])->name('admin.booking.edit');
Route::put('/bookingupdate/{book_id}',[BookingController::class,'bookingUpdate'])->name('admin.booking.update');
Route::get('/booking/search',[BookingController::class,'bookingSearch'])->name('admin.booking.search');

//Staff
Route::get('/addstaff',[StaffController::class,'staffadd'])->name(name:'admin.staff.add');
Route::get('/stafflist',[StaffController::class,'stafflist'])->name(name:'admin.staff.list');
Route::post('/addstaff/create',[StaffController::class,'stafflistCreate'])->name(name:'admin.staff.create');
Route::get('/staffdetails/view/{staff_id}',[StaffController::class,'staffdetails'])->name(name:'admin.staffdetails.view');
Route::get('/stafffdetails/delete/{staff_id}',[StaffController::class,'staffdelete'])->name(name:'admin.staffdetails.delete');
Route::get('/staff/edit/{staff_id}',[StaffController::class,'staffEdit'])->name('admin.staff.edit');
Route::put('/staff/update/{staff_id}',[StaffController::class,'staffUpdate'])->name('admin.staff.update');
Route::get('/staff/search',[StaffController::class,'staffSearch'])->name('admin.staff.search');

//Status
Route::get('/arriveddestination',[StatusController::class,'arriveddestination'])->name(name:'admin.arrived.destination');
Route::get('/intransit',[StatusController::class,'intransit'])->name(name:'admin.in.transit');
Route::get('/outdelievery',[StatusController::class,'outdelievery'])->name(name:'admin.out.delievery');
Route::get('/totalcourier',[StatusController::class,'totalcourier'])->name(name:'admin.total.courier');
Route::get('/totaldelieverd',[StatusController::class,'totaldelieverd'])->name(name:'admin.total.delieverd');
Route::get('/totalpickup',[StatusController::class,'totalpickup'])->name(name:'admin.total.pickup');
Route::get('/totalshipped',[StatusController::class,'totalshipped'])->name(name:'admin.total.shipped');




//Tracking
Route::get('/admin/status',[StatusController::class,'status'])->name(name:'admin.status');
Route::get('/admin/tracklist',[StatusController::class,'tracklist'])->name(name:'admin.track.list');
    });
});