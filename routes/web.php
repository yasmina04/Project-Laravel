<?php

use App\Models\Wisata;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\dashboardAdminController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\postcontroller;

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
// Route::get('/', function(){
//     return view ('landing');
// });

Route::get('/Login', [UserController::class, 'loginPage']);

//landing page register
Route::get('/', [UserController::class, 'create']);
Route::resource('Login', UserController::class);

//route crud wisata
Route::resource('wisata', postcontroller::class);


//route dashboard admin
Route::get('/dashboardAdmin', [dashboardAdminController::class, 'index']);
Route::get('/dashboardAdmin/search', [dashboardAdminController::class, 'search']);


//route dashboard user
Route::get('/Home', [dashboardController::class, 'index']);
Route::get('/Home/search', [dashboardController::class, 'search']);


//review and detail wisata
Route::resource('review', dashboardController::class);
Route::get('/wisata/{id}', [postcontroller::class, 'detail']);

//liat wisata dan add coment wisata user
Route::get('/detail/{id}/{nama}', [dashboardController::class, 'detail']);
Route::post('/detail/{id}/{nama}', [dashboardController::class, 'store']);

//liat wisata dan add coment wisata admin
Route::get('/detailAdmin/{id}/{nama}', [dashboardAdminController::class, 'detail']);
Route::post('/detailAdmin/{id}/{nama}', [dashboardAdminController::class, 'store']);


//crud events
Route::get('/event', [EventController::class, 'index'])->name('tabel');
Route::get('/event/create', [EventController::class, 'create']);
Route::post('/event/create', [EventController::class, 'store']);

Route::get('event/{id}/', [EventController::class, 'edit'])->name('editForm');
Route::post('event/{id}/', [EventController::class, 'update'])->name('editForm');

Route::post('event/{id}/delete', [EventController::class, 'destroy'])->name('deleteForm');

//route detail event
Route::get('/detailEvent/{id}', [EventController::class, 'index3']);

//route rekomendasi
Route::get('/rekomendasi', [EventController::class, 'filterRecommend']);
Route::get('/populer', [EventController::class, 'filterPopular']);
// Route::get('/Home/rekomendasi/detail/{id}/{nama}', [dashboardController::class, 'detail']);
// Route::get('/Home/populer/detail/{id}/{nama}', [dashboardController::class, 'detail']);


//route user profile
Route::post('/UserProfile/{id}', [UserController::class, 'updateprofile']);
Route::get('/UserProfile/{id}', [UserController::class, 'profile']);
