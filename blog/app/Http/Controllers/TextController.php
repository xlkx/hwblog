<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TextController extends Controller
{
    //
	
	public function index () {
		echo 'index';
	}
	
	public function read ($text) {
		echo $text;
	}
}
