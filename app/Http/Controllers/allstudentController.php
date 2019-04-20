<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class allstudentController extends Controller
{
    public function allstudents(){
    	return view('admin.allstudents');
    }
}
