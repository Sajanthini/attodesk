<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('index');
});

Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});
Route::get('/',[UserController::class,'getLogin']);
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
// Route::get('/getCompanyInfo',[UserController::class,'getCompanyInfo'])->name('getCompanyInfo');