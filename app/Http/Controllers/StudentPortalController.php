<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPortalController extends Controller
{   

	public function portal(){
		return view('admin.studentportal');

	}
}
    /*public function student_dashboard(){
         return view('admin.student_dashboard');
    }

    public function profile(){
    	return view('admin.profile');
    }//*
}
