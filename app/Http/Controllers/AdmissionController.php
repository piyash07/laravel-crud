<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdmissionController extends Controller
{
	public function admission(){
   		return view('admin.admission');
   	}

   	public function new_admission(){
   		return view('admin.admission');
   	}
   	public function manage_admission(){
   		return view('admin.manage_admission');
   	}
 
}
