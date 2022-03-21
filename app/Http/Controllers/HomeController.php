<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('component/home');
    }
    public function onAir(){
        return view('layouts/onAir');
    }
    public function onAir_oprec(){
        return view('layouts/onAir_oprec');
    }
    

    public function programs(){
        return view('component/programs');
    }
    public function crews(){
        return view('component/crews');
    }
    public function about(){
        return view('component/about');
    }
}
