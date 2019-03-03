<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use Session;
session_start();

class adminController extends Controller
{
   public function admin_dashboard(){
    // $this->adminauth();
   	return view('admin.dashboard');
    }
    public function backfunction(){
    	return view('admin.admin_login');
    }

   	public function login_dashboard(Request $request)
   	{
      //return view('admin.dashboard');
      $email=$request->admin_email;
      $password=md5($request->admin_password);
      $result=DB::table('admin_tbl')
      ->where('admin_email',$email)
      ->where('admin_password',$password)
      ->first();
      //echo "piyash"; //video part:8 finish. 9start hbe.                         

      if ($result){
          Session::put('admin_email',$result->admin_email);
          Session::put('admin_id',$result->admin_id);
          return Redirect::to('/admin_dashboard');

        }else{
      	Session::put('exception','Email or Password Invalid');
      	return Redirect::to('/backend');
      }                                                     
   	}

    public function adminauth(){
      $admin_id = Session::get('admin_id');
      if ($admin_id) {
        return;
      }else{
        return Redirect::to('backend')->send();
      }
    }


    // logout function
    public function logout(){
      Session_flush();
      return Redirect::to('backend');
    }



   }
 