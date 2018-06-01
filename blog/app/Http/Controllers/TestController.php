<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
	public function testGet () {
		return view('test');
	}
	
	public function testPost () {
		return view('test2');
	}
	
}
