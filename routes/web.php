<?php
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Casiocontroller;
use App\Http\Controllers\CourseController;

//Route::get('/casio', function () {
   // return view('casio/calc');
//});
//Route::get('/casio/cong',[CasioController::class,'add']);


Route::get('/course',function(){
    return view('index');
});
Route::get('/course',[CourseController::]);