<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function notice_board(){
    	return view('admin.noticeboard');
    }
    public function add_notice(){
    	return view('admin.add_noticed');
    }

    public function manage_notice(){
    	return view('admin.manage_notice');
    }
}
