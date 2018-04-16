<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class test extends Controller
{
    //
    function index(){
        var_dump(DB::select("select 1 from dual"));
        return view('welcome');
    }
}
