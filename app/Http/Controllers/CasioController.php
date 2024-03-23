<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CasioController extends Controller
{
    public function add(Request $request){
        $a=$request->input("n1");
        $b=$request["n2"];
        $kq=intval($a)+intval($b);
        $kq2=$a."+".$b. "=".$kq ;
        return view("casio.calc",["result"=>$kq2]);
    }
}
