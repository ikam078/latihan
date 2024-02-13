<?php

use App\Http\Controllers\Aboutcontroller;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

Route::get('/test', function () {
    return view('hello');
});

Route::get('/parent', function(){
    return view('admin.parent');
});

Route::resource('/about', Aboutcontroller::class);

Route::get('/profile-index', [ProfileController::class, 'index'])->name('Profileroute');