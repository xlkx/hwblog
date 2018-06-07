<?php

namespace App\Includes;

class Helpers
{

	protected $object;

	public function __construct () {
		$this->object = $this->generate(4);
	}

	public function get_object () {
		return $this->object;
	}

	public function generate (int $num) {
		$mass = [];
		for ($i=1; $i<=$num; $i++) {
			$mass [] = $this->get_mass()[array_rand($this->get_mass())];
		}

		return implode(', ', $mass);
	}

	public function get_mass () {
		return ['some', 'tom', 'rom', 'fom', 'som', 'dom', 'kom', 'com', 'nom'];
	}
}
