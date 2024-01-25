<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShiftController extends Controller
{
    public function shiftindex(){
        return view('shiftindex');
    }

    public function addsale(){
        return view('addsale');
    }
}
