<?php

namespace App\Http\Controllers\Test;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    //

	private $request;

	public function __construct (Request $request) {
		$this->request = $request;
	}

	public function index () {
		if ($this->request->input('point')) {
			switch ($this->request->input('point')) {
				case 'header':
					$this->setHeader();
					break;

				case 'path':
					$this->showPath();
					break;

				case 'status':
					$this->setStatus();
					break;

				case 'string':
					$this->getString();
					break;

				case 'download':
					$this->testDownload();
					break;

				case 'redirect':
					$this->testRedirect();
					break;

				default:
					$this->defaultAction();
					break;
			}
			//exit;
		}

		return view('test', ['title'=>'testing response', 'content'=>view('testblock.form')]);

	}

	public function test () {
		return $this->setHeader2();
	}

	public function postIndex (Request $request) {
		switch ($this->request->input('point')) {
			case 'header':
				$this->setHeader();
				break;

			case 'path':
				$this->showPath();
				break;

			case 'status':
				$this->setStatus();
				break;

			case 'string':
				$this->getString();
				break;

			default:
				// code...
				break;
		}
		//dump($request->input('point'));
		//return view('test', ['title'=>'test_post', 'post'=>'request']);
	}

	public function testRedirect () {
		return redirect()
			//->route('user.index');
			->action('TestController@index');
	}

	private function defaultAction () {
		return view('test', ['title'=>'testing response', 'content'=>view('testblock.form')]);
	}

	private function getString () {
		return 'some string here';
	}

	private function setHeader () {
		return response ($this->request->input('point'), 404)
			->header('Content-Type', 'text/plain')
			->header('X-Cusom-Header', 'Header Value')
			->cookie('testcookie', 'value', -15);
	}

	private function showPath () {
		return $this->request->path();
	}

	private function setStatus () {
		return response ('content', 404);
		//	->view('test', ['title'=>'set status', 'content'=>'content'], $this->request->input('data'))
		//	->header('Content-Type', 'text/html');
	}

	private function setHeader2 () {
		return response ('content', 333)
			->header('Content-Type', 'text/html')
			->header('X-Cusom-Header', 'Header Value')
			->cookie('testcookie', 'value', 15);
	}

	private function testDownload () {
		return response()
			->download('file.txt');

	}

}
