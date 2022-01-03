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




    Route::get('/login',[AdminController::class,'login'])->name('admin.login');
    Route::post('/do/login',[AdminController::class,'doLogin'])->name('admin.doLogin');

    Route::group(['prefix'=>'admin','middleware'=>['auth','admin']],function () {
    Route::get('/admin', function () {
        return view('admin.partial.home');
    })->name('admin.home');

    Route::get('/logout',[AdminController::class,'logout'])->name('admin.logout');

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
Route::get('/arrived/destination',[StatusController::class,'arriveddestination'])->name(name:'admin.arrived.destination');
Route::get('/arrived/destination/details/view/{arrd_id}',[StatusController::class,'arriveDetails'])->name(name:'admin.arrived.details.view');
Route::get('/arrived/destination/edit/{arrd_id}',[StatusController::class,'arriveEdit'])->name('admin.arrived.edit');
Route::put('/arrived/destination/update/{arrd_id}',[StatusController::class,'arriveUpdate'])->name('admin.arrived.update.status');



Route::get('/intransit',[StatusController::class,'intransit'])->name(name:'admin.in.transit');
Route::get('/intransit/details/view/{intra_id}',[StatusController::class,'intransitDetails'])->name(name:'admin.intransit.details.view');
Route::get('/intransit/edit/{intra_id}',[StatusController::class,'intransitEdit'])->name('admin.intransit.edit');
Route::put('/intransit/update/{intra_id}',[StatusController::class,'intransitUpdate'])->name('admin.intransit.update.status');



Route::get('/outdelievery',[StatusController::class,'outdelievery'])->name(name:'admin.out.delievery');
Route::get('/outdelievery/details/view/{outd_id}',[StatusController::class,'outdelieveryDetails'])->name(name:'admin.out.delievery.details.view');
Route::get('/outdelievery/edit/{outd_id}',[StatusController::class,'outdelieveryEdit'])->name('admin.out.delievery.edit');
Route::put('/outdelievery/update/{outd_id}',[StatusController::class,'outdelieveryUpdate'])->name('admin.out.delievery.update.status');



Route::get('/accepted/by/courier',[StatusController::class,'acceptCourier'])->name(name:'admin.accept.courier');
Route::get('/accept/courier/details/view/{ac_id}',[StatusController::class,'acceptdetails'])->name(name:'admin.acceptdetails.view');
Route::get('/accept/edit/{ac_id}',[StatusController::class,'acceptEdit'])->name('admin.accept.edit');
Route::put('/update/{ac_id}',[StatusController::class,'acceptUpdate'])->name('admin.update.status');


Route::get('/totaldelieverd',[StatusController::class,'totaldelieverd'])->name(name:'admin.total.delieverd');
Route::get('/delieverd/details/view/{d_id}',[StatusController::class,'delieverDetails'])->name(name:'admin.deliever.details.view');
Route::get('/delieverd/edit/{d_id}',[StatusController::class,'delieverEdit'])->name('admin.deliever.edit');
Route::put('/delieverd/update/{d_id}',[StatusController::class,'delieverUpdate'])->name('admin.deliever.update.status');



Route::get('/totalpickup',[StatusController::class,'totalpickup'])->name(name:'admin.picked.up');
Route::get('/pickup/details/view/{p_id}',[StatusController::class,'pickupDetails'])->name(name:'admin.pickup.details.view');
Route::get('/pickup/edit/{p_id}',[StatusController::class,'pickupEdit'])->name('admin.pickup.edit');
Route::put('/pickup/update/{p_id}',[StatusController::class,'pickupUpdate'])->name('admin.pickup.update.status');


Route::get('/totalshipped',[StatusController::class,'totalshipped'])->name(name:'admin.shipped');
Route::get('/shipped/details/view/{s_id}',[StatusController::class,'shippedDetails'])->name(name:'admin.shipped.details.view');
Route::get('/shipped/edit/{s_id}',[StatusController::class,'shippedEdit'])->name('admin.shipped.edit');
Route::put('/shipped/update/{s_id}',[StatusController::class,'shippedUpdate'])->name('admin.shipped.update.status');


Route::get('/totalcollected',[StatusController::class,'collected'])->name(name:'admin.courier.collected');
Route::get('/collected/details/view/{collect_id}',[StatusController::class,'collectDetails'])->name(name:'admin.collect.details.view');
Route::get('/acollectededit/{collect_id}',[StatusController::class,'collectEdit'])->name('admin.collect.edit');
Route::put('/collected/update/{collect_id}',[StatusController::class,'collectUpdate'])->name('admin.collect.update.status');

Route::get('/ready/to/pickup',[StatusController::class,'readyPickup'])->name(name:'admin.ready.pickup');
Route::get('/ready/to/pickup/details/view/{rp_id}',[StatusController::class,'readypickupDetails'])->name(name:'admin.readypickup.details.view');
Route::get('/ready/to/pickup/edit/{rp_id}',[StatusController::class,'readypickupEdit'])->name('admin.readypickup.edit');
Route::put('/ready/to/pickup/update/{rp_id}',[StatusController::class,'readypickupUpdate'])->name('admin.readypickup.update.status');


Route::get('/unsuccessful/delievery',[StatusController::class,'unsuccessful'])->name(name:'admin.unsuccessful.delievery');
Route::get('/unsuccessful/details/view/{unsu_id}',[StatusController::class,'unsuccessfulDetails'])->name(name:'admin.unsuccessful.details.view');
Route::get('/unsuccessful/edit/{unsu_id}',[StatusController::class,'unsuccessfulEdit'])->name('admin.unsuccessful.edit');
Route::put('/unsuccessful/update/{unsu_id}',[StatusController::class,'unsuccessfulUpdate'])->name('admin.unsuccessful.update.status');



//Tracking
Route::get('/status',[StatusController::class,'status'])->name(name:'admin.status');
Route::get('/tracklist',[StatusController::class,'tracklist'])->name(name:'admin.track.list');
    });
