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

Route::get('dashboard', [HomeController::class, 'index'])->name('dashboard');

//-------------------Sender-------------------------------------------------------

Route::middleware(['sender'])->prefix('sender')->group(function(){

    Route::resource('parcels', ParcelController::class);

    Route::get('complete-parcels', [ParcelController::class, 'complete_parcel'])->name('complete-parcels');

});
//-------------------Biker-------------------------------------------------------

Route::middleware(['biker'])->prefix('biker')->group(function(){

    Route::resource('orders', OrderController::class);
    Route::resource('order-parcels', ParcelController::class);
    Route::get('/parcels-list', [OrderController::class,'available_parcels']);
    Route::get('/complete-parcels', [OrderController::class,'complete_parcels']);

});

});

/*
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});*/

require __DIR__.'/auth.php';
