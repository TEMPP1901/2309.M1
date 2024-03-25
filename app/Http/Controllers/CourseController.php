<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    public function index(){
        $ds= DB::table('tbcourse');
        return view("course.index",["list"=>$ds]);
    }
}