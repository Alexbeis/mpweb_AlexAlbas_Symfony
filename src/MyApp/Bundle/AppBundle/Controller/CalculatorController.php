<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\App\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;

class CalculatorController
{
	public function addAction($param1, $param2)
	{
		//Instance of our component calculator
		$calculator = new Calculator();
		$result = $calculator->add($param1, $param2);
		return new Response((int) $result);
	}


}
