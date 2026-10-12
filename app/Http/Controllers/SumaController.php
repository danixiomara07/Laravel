<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    //
    public function index(){
        return view("suma", ["res" => null]);
    } 
    public function sumar(Request $request){
        $m = $request->input("num1");
        $n = $request->input("num2");

        $respuesta = $m + $n;

        return view("suma", ["res"=> $respuesta]);
    }   
}
