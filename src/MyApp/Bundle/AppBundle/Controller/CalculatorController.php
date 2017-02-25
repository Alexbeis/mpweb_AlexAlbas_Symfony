<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\App\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController
{
	//Va por POST
	public function addAction(Request $request)
	{
		//Instance of our component calculator
		$calculator = new Calculator();
		//El objeto request necesario para coger los parametros del método POST
		$result = $calculator->add($request->request->get('param1'), $request->request->get('param2'));
		return new Response((int) $result);
	}

	// /substract/1/?param=2
	public function substractAction($param1, Request $request)
	{
	
		$calculator = new Calculator();
		return new Response((int) $calculator->substract($param1,$request->query->get('param')));
	}

}
