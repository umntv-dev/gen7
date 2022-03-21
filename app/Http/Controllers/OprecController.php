<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OprecController extends Controller
{
    public function index(){
        return view('layouts/oprec');
    }

    public function data(){
        $table = DB::table('oprecs')->get();
        dd($table);
    }
}
