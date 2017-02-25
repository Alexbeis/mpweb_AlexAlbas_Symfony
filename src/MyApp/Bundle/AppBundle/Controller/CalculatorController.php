<?php

namespace MyApp\Bundle\AppBundle\Controller;

use MyApp\Component\App\Calculator\Calculator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

class CalculatorController
{

	// por POST
	public function addAction(Request $request)
	{
		$calculator = new Calculator();
		return new Response((int) $calculator->add($request->request->get('param1'), $request->request->get('param2')));
	}

	// /substract/1/?param=2
	public function substractAction($param1, Request $request)
	{
		$calculator = new Calculator();
		return new Response((int) $calculator->substract($param1,$request->query->get('param')));
	}
	
	// /multiply/?param1=3&param2=3 returns 9
	public function multiplyAction(Request $request)
	{
		$calculator = new Calculator();
		return new Response((int) $calculator->multiply($request->query->get('param1'),$request->query->get('param2'))); 
	}

	// /division/9/3
	public function divisionAction($param1, $param2)
	{
		$calculator = new Calculator();
		return new Response((int)$calculator->division($param1,$param2));
	}
}
