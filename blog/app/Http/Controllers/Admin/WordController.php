<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
    public function index () {
		return view('base', ['title'=>'main', 'menu'=>view('menu'), 'content'=>view('test2')]);
	}
	
	public function oneWord ($word) {
		return view('base', ['title'=>'main', 'menu'=>view('menu'), 'content'=>view('oneWord', ['word'=>['word'=>$word, 'mean'=>'something can be here']])]);
	}
	
	public function add () {
		echo 'Add word';
	}
	
	public function addPost () {
		echo 'AddPost';
	}
	
	public function delete ($word) {
		echo 'delete '.$word;
	}
}
