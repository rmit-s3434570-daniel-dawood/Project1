<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    public function v1(){
        return view('Vehicles.v1');
    }
    
    public function v2(){
        return view('Vehicles.v2');
    }
    
    public function v3(){
        return view('Vehicles.v3');
    }
    
    public function v4(){
        return view('Vehicles.v4');
    }
}