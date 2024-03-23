<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Casiocontroller;
Route::get('/casio', function () {
    return view('casio/calc');
});
Route::get('/casio/cong',[CasioController::class,'add']);