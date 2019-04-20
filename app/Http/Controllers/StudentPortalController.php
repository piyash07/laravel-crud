<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentPortalController extends Controller
{   

	public function portal(){
		return view('admin.studentportal');
	}

    public function student_dashboard(){
         return view('admin.student_dashboard');
    }
    public function profile(){
    	return view('admin.profile');
    }
    public function update_profile(){
    	return view('admin.update_profile');
    }
    public function password_change(){
    	return view('admin.password_change');
    }
    public function payment_ledger(){
    	return view('admin.payment_ledger');
    }
     public function payment_schema(){
    	return view('admin.payment_schema');
    }
    public function tution_fees(){
    	return view('admin.tutionfee');
    }
    public function drop_session(){
    	return view('admin.drop_session');
    }
    public function register_courses(){
    	return view('admin.register_courses');
    }
    public function student_routine(){
    	return view('admin.student_routine');
    }
    public function live_result(){
    	return view('admin.liveresult');
    }
    public function exam_clearance(){
    	return view('admin.exam_clearance');
    }
    public function transcript(){
    	return view('admin.transcript');
    }
    public function result(){
    	return view('admin.result');
    }
    public function application(){
    	return view('admin.application');
    }
    public function logout(){
    	return view('admin.logout');
    }
}
