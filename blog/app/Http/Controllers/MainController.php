<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function mainPage () {
        return view('base', ['title'=>'main', 'menu'=>view('menu'), 'content'=>view('test2')]);
    }
    
    public function notFoundPage () {
        return view('404');
    }
}
