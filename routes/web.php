<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ParcelController;
use App\Http\Controllers\OrderController;

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Sender;
use App\Http\Middleware\Biker;
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


Route::middleware(['auth'])->group(function(){

Route::get('dashboard', [HomeController::class, 'index']);

Route::middleware(['sender'])->prefix('sender')->group(function(){

    Route::get('create-parcel', [ParcelController::class, 'index'])->name('create-parcel');
    Route::post('add-parcel', [ParcelController::class, 'add_parcel'])->name('add-parcel');

    Route::get('current-parcels', [ParcelController::class, 'current_parcel'])->name('current-parcels');
    Route::get('complete-parcels', [ParcelController::class, 'complete_parcel'])->name('complete-parcels');

});

Route::middleware(['biker'])->prefix('biker')->group(function(){

    Route::get('to-do', [OrderController::class, 'index'])->name('to-do');

});

});

//-------------------Sender-------------------------------------------------------
Route::get('/sender-dashboard', function () {
    return view('sender/sender-dashboard');
});

/*Route::get('/create-parcel', function () {
    return view('sender/create-parcel');
});*/

Route::get('/parcels', function () {
    return view('sender/parcels');
});


//-------------------Biker-------------------------------------------------------
/*Route::get('/to-do', function () {
    return view('biker/to-do');
});*/

Route::get('/parcels-list', function () {
    return view('biker/parcels-list');
});


/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
