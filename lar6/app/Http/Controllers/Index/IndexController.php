<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
    	return view('home/index');
    }

    public function index1(){
    	// return view('home/index');
    	echo "111";
    }
}
