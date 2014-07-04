<?php namespace Siteshop\Mobilpay\Controllers;

class MobilpayController extends \BaseController {

	public function index()
	{
		$response = \Mobilpay::makeResponse();

		return \Response::view('mobilpay::response', $response, 200, ['Content-type' => 'application/xml']);
	}

	public function postConfirmation()
	{
		$response = \Mobilpay::makeResponse();

		return \Response::view('mobilpay::response', $response, 200, ['Content-type' => 'application/xml']);
	}
}