<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tutionsController extends Controller
{
    public function tutionfees(){
    	return view('admin.tutionfee');

    }
}
