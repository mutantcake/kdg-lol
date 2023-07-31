<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class registerController extends Controller
{
    public function adminRegister(){
        return view('admin');
    }

    public function managerRegister(){
        return view('addManager');
    }
    public function clientRegister(){
        return view('inscription');
    }
}
