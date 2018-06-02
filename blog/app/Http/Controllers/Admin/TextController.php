<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TextController extends Controller
{
	
	public function index () {
		echo 'Admin.index';
	}
	
	public function read ($text) {
		echo 'Admin '.$text;
	}
}
