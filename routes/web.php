<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/administrator',[AdminController::class, 'redirects'])->name('admin.home');
    Route::get('/users',[AdminController::class, 'user']);
Route::get('/foodmenu',[AdminController::class, 'foodmenu']);
Route::post('/uploadfood',[AdminController::class, 'uploadfood']);
Route::get('/foodtable',[AdminController::class, 'foodtable'])->name('foodTable');
Route::get('/deletefood/{id}',[AdminController::class, 'deletefood']);
Route::get('/updatefood/{id}',[AdminController::class, 'updatefood']);
Route::post('/update/{id}',[AdminController::class, 'update']);
Route::post('/reservation',[AdminController::class, 'reservation']);
Route::get('/viewreservation',[AdminController::class, 'viewreservation']);
Route::get('/viewchef',[AdminController::class, 'viewchef'])->name('chefTable');
Route::get('/addchef',[AdminController::class, 'addchef']);
Route::get('/updatechef/{id}',[AdminController::class, 'updatechef']);
Route::post('/postupdatechef/{id}',[AdminController::class, 'postupdatechef']);
Route::post('/postchef',[AdminController::class, 'postchef']);
Route::get('/orders',[AdminController::class, 'orders']);
Route::get('/search',[AdminController::class, 'search']);
Route::get('/deleteuser/{id}',[AdminController::class, 'deleteuser']);
Route::get('/deletechef/{id}',[AdminController::class, 'deletechef']);

});

Route::middleware(['auth', 'user'])->group(function () {
    Route::post('/addcart/{id}',[HomeController::class, 'addcart']);
Route::get('/showcart/{id}',[HomeController::class, 'showcart']);
Route::get('/deletecart/{id}',[HomeController::class, 'deletecart']);
Route::post('/orderconfirm',[HomeController::class, 'orderconfirm']);
Route::get('/home',[HomeController::class, 'home'])->name('user.dashboard');




});

Route::get('/',[HomeController::class, 'index'])->name('index');






Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
