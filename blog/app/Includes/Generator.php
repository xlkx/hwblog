<?php

namespace App\Includes;

class Generator
{

	protected $helper;

	public function __construct (Helpers $helper) {
		$this->helper = $helper;
	}

	public function get_phrase (int $num) {

		return $this->helper->generate($num);
	}

	public function get_instance () {

		return $this->helper->get_object();
	}
}
