<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WordController extends Controller
{
	public function index () {
		return view('pages.main', ['title'=>'something can be write here']);
	}

	public function oneWord ($word) {
		return view('base', ['title'=>'main', 'content'=>view('oneWord', ['word'=>['word'=>$word, 'mean'=>'something can be here']])]);
	}

	public function add () {
		echo 'Add word';
	}

	public function addPost () {
		echo 'AddPost';
	}

	public function delete ($word) {
		return view ('delete', ['title'=>'delete']);
	}

}
