<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AdminController::class)->prefix('dashboard')->group(function () {
    Route::get('/', 'admin_dashboard')->name('dashboard');
    Route::get('/administrator', 'administrator')->name('administrator');
    Route::get('/mentors', 'mentors')->name('mentors');
    Route::get('/pendingmentors', 'pendingmentors')->name('pendingmentors');
    Route::get('/mentee', 'mentee')->name('mentee');
    Route::get('/pendingmentee', 'pendingmentee')->name('pendingmentee');
    Route::get('/users', 'users')->name('users');
    Route::get('/approvedmeeting', 'approvedmeeting')->name('approvedmeeting');
    Route::get('/pendingmeeting', 'pendingmeeting')->name('pendingmeeting');
    Route::get('/rejectedmeeting', 'rejectedmeeting')->name('rejectedmeeting');
    Route::get('/completedmeeting', 'completedmeeting')->name('completedmeeting');
    Route::get('/allmeeting', 'allmeeting')->name('allmeeting');
    Route::get('/allticket','allticket')->name('allticket');
    Route::get('/pendingticket','pendingticket')->name('pendingticket');
    Route::get('/completedticket','completedticket')->name('completedticket');
    // Route::get('/logout', 'AdminLogout')->name('admin.logout');
    // Route::get('/change', 'ChangePassword')->name('admin.changepassword');
    // Route::post('/update/password', 'AdminUpdatePassword')->name('update.password');
    // Route::get('/profile', 'admin_profile')->name('admin.profile');
    // Route::post('/store/profile', 'store_profile')->name('admin.store.profile');
});
