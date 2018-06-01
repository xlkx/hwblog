<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
	public function index () {
		echo 'index';
	}
	
	public function login () {
		echo 'login';
	}
	
	public function loginPost () {
		echo 'loginPost';
	}
	
	public function signUp () {
		echo 'signUp';
	}
	
	public function signUpPost () {
		echo 'signUpPost';
	}
	
	public function profile ($user) {
		echo $user;
	}
}
