<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
