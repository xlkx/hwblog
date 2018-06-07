<?php

namespace App\Http\Controllers\Client;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MainController extends Controller
{

    public function index () {
      return view('base', ['title'=>'main']);
    }

    public function e404 () {
      return view('pages.e404', ['title'=>'E404']);
    }

}
