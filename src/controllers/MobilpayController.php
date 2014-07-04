<?php namespace Siteshop\Mobilpay\Controllers;

class MobilpayController extends \BaseController {

	public function index()
	{
		$response = \Status::first();

		dump_exit(json_decode($response->data));

		return \Response::view('mobilpay::response', $response, 200, ['Content-type' => 'application/xml']);
	}

	public function confirmation()
	{
		$response = \Mobilpay::makeResponse();

		return \Response::view('mobilpay::response', $response, 200, ['Content-type' => 'application/xml']);
	}
}