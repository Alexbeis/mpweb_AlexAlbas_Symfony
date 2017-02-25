<?php

namespace MyApp\Component\App\Calculator;

class Calculator {

	public function add(int $a, int $b) :int
	{
		return $a + $b;
	}


	public function substract(int $a, int $b) :int
	{	
		return $a - $b;
	}

	
	public function multiply(int $a,int $b) : int

	{
		return $a * $b;
	}

	public function division(int $a, int $b):int

        {
		if ($b == 0) exit();
		return $a / $b;
	}
}
