<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Redirect;
use Session;
session_start();

class aboutcontroller extends Controller
{
	  //public function home_page(){
    //	return view('homepage');

   //}
    public function layoutpage(){
    	return view('main_layout');
    }

    public function abouts_page(){
      return view('about');
    }

    public function about_page(Request $request){
    	 $data =array();

       $data['name']=$request->name;
       $data['email']=$request->email;
       $data['city_name']=$request->city_name;
       $data['password']=$request->password;

      DB::table('abouts')->insert($data);
      return Redirect::to('about-page');
    }

    public function teachers_page(){
  		return view('teachers');
  	}
  	 public function students_page(){
  		return view('students');
  	}
  	public function courses_page(){
  		return view('courses');
  	}
  	 public function reviews_page(){
  		return view('reviews');
  	} 
    public function contacts_page(){
      return view('contact');
    }
  	public function contact_page(Request $request){
       $data =array();

       $user['name']=$request->name;
       $user['email']=$request->email;
       $user['message']=$request->message;

      DB::table('contacts')->insert($user);
      return Redirect::to('contact-page');
    }
  	 public function loginPage(){
      return view('student_login');
     }
    // public function loginPage(Request $request){
      //return view('student_login');
    // }
    
}
