<?php

namespace oop;
include 'child.php';

class Honda extends Mobil
{
	public $merek;
	public function SetNamaMerek($nm)
	{
		$this->merek =$nm;
	}
	public function Output()
	{
		echo "gw pnya mbl mereknya ". $this->merek;
	}
}
2