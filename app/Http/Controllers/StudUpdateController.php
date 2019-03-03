<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class StudUpdateController extends Controller
{
     public function index(){
     	$users= DB::select('select * from abouts');
     	return view('update.stud_edit_view',["users"=>$users]);
     }
     public function show($id){
     	$users= DB::select('select * from abouts where id = ?',[$id]);
     	return view('update.stud_update',['users'=>$users]);

     }
     public function edit(Request $request,$id){
     	//$user =array();
       $name      = $request->input('name');
       $email     = $request->input('email');
       $city_name = $request->input('city_name');
       $password  = $request->input('password');
  	  
   //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
//DB::table('student')->update($data);
// DB::table('student')->whereIn('id', $id)->update($request->all());

   DB::update('update abouts set name = ?,email=?,city_name=?,password=? where id = ?',[$name,$email,$city_name,$password,$id]);
  echo "Record updated successfully.
";

     }
}
