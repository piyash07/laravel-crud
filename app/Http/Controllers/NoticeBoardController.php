<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NoticeBoardController extends Controller
{
    public function notice_board(){
    	return view('admin.noticeboard');
    }
}
