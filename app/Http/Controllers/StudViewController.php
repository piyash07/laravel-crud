<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StudViewController extends Controller
{
    public function index(){
  
    	$users = DB::select('select * from contacts');
        return view('home_page',['users'=>$users]);

    }
    public function tree(){
        $users = DB::select('select * from abouts');
        return view('ViewAboutsData',['users'=>$users]);
    }
}
