<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Includes\Generator;

class MainController extends Controller
{
    public function index () {
      return response ('index', 404)
        ->header('Content-Type', 'text/plain');
    }

    public function mainPage () {
        return view('base', ['title'=>'main', 'menu'=>view('menu'), 'content'=>view('test2')]);
    }

    public function notFoundPage () {
        return view('404');
    }

    public function generate (Generator $gener) {
      return view('test', ['data'=>$gener->get_phrase(4), 'title'=>'test']);
    }

    public function generate2 () {
      $genrt = resolve ('MyGenerator');
      $string = '';
      for ($i=0; $i<=10; $i++) {
        $string = $string.' <br> '.$genrt->get_phrase(4);
      }

      return view('test', ['data'=>$string, 'title'=>'test2']);
    }

    public function generate3 () {

      $string = '';
      for ($i=0; $i<=10; $i++) {
        $genrt = resolve ('MyGenerator');
        $string = $string.' <br> '.$genrt->get_instance();
      }

      return view('test', ['data'=>$string, 'title'=>'test3']);
    }
}
