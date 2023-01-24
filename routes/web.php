<?php

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
    return view('auth.login');
});


//-------------------Sender-------------------------------------------------------
Route::get('/sender-dashboard', function () {
    return view('sender/sender-dashboard');
});

Route::get('/create-parcel', function () {
    return view('sender/create-parcel');
});

Route::get('/parcels', function () {
    return view('sender/parcels');
});


//-------------------Biker-------------------------------------------------------
Route::get('/to-do', function () {
    return view('biker/to-do');
});

Route::get('/parcels-list', function () {
    return view('biker/parcels-list');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
