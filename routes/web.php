<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonorController;
use App\Http\Controllers\RequisitionController;
use App\Models\Donor;
use App\Models\DonorRequisition;
use App\Models\Requisition;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {

    $donor = Donor::all()->count();
    $recipient = Requisition::all()->count();


    return view('welcome', compact('donor', 'recipient'));
})->name('home');


Route::post('/', [RequisitionController::class, 'request'])->name('request');
Route::get('/find-donor', [RequisitionController::class, 'find_donor'])->name('find_donor');
Route::get('/find-donor/q', [RequisitionController::class, 'search_donor'])->name('search_donor');


/******************** Donor Route ********************/

Route::get('/donor/register', [DonorController::class, 'index'])->name('donate');
Route::post('/donor/register', [DonorController::class, 'add'])->name('adddonor');

Route::middleware(['donorcheck'])->group(function () {



    Route::get('/donor/login', [DonorController::class, 'login'])->name('donor.login');
    Route::post('/donor/login', [DonorController::class, 'login_check'])->name('donor.login_check');

    Route::get('/donor/logout', [DonorController::class, 'logout'])->name('donor.logout');

    Route::get('/donor/dashboard', [DonorController::class, 'dashboard'])->name('donor.dashboard');
    Route::get('/donor/profile/edit/{id}', [DonorController::class, 'profile_edit'])->name('donor.profile.edit');
    Route::put('/donor/profile/edit/{id}', [DonorController::class, 'profile_update'])->name('donor.profile.update');

    Route::post('/donor/donated', [DonorController::class, 'donated'])->name('donor.donated');

});


/******************** Admin Route ********************/

Route::middleware(['admincheck'])->group(function () {

    Route::get('/admin/register', [AdminController::class, 'register'])->name('admin.register');
    Route::post('/admin/register', [AdminController::class, 'admin_register'])->name('admin.registered');

    Route::get('/admin/login', [AdminController::class, 'login'])->name('admin.login');
    Route::post('/admin/login', [AdminController::class, 'login_check'])->name('admin.login_check');

    Route::get('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('/admin/change-password', [AdminController::class, 'change_password'])->name('admin.change_password');
    Route::put('/admin/change-password', [AdminController::class, 'change_password_update'])->name('admin.change_password_update');

    Route::get('/admin/donors', [AdminController::class, 'donors'])->name('admin.donors');
    Route::get('/admin/donors/add', [AdminController::class, 'donors_add'])->name('admin.donors.add');
    Route::post('/admin/donors/add', [AdminController::class, 'donors_save'])->name('admin.donors.save');
    Route::get('/admin/donors/delete/{id}', [AdminController::class, 'donors_delete'])->name('admin.donors.delete');

    Route::get('/admin/donors/details/{id}', [AdminController::class, 'donors_details'])->name('admin.donors.details');

    Route::get('/admin/requests', [AdminController::class, 'requests'])->name('admin.requests');
    Route::get('/admin/requests/delete/{id}', [AdminController::class, 'requests_delete'])->name('admin.requests.delete');

});