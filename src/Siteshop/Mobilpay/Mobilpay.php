<?php namespace Siteshop\Mobilpay;

class Mobilpay {

	protected $environment;
	protected $sandbox_url;
	protected $payment_url;
	protected $cert_path;
	protected $signature;
	protected $confirm_url;
	protected $return_url;

	public function __construct($config) {
		$this->environment = $config['environment'];
		$this->sandbox_url = $config['sandbox_url'];
		$this->payment_url = $config['payment_url'];
		$this->cert_path = $config['cert_path'];
		$this->signature = $config['signature'];
		$this->confirm_url = $config['confirm_url'];
		$this->return_url = $config['return_url'];
	}

	public function makePayment($orderId, $currency, $amount, $details, $billing, $shipping)
	{
		$request = new Card();
		$request->signature = $this->signature;
		$request->orderId = $orderId;
		$request->confirmUrl = $this->confirm_url;
		$request->returnUrl = $this->return_url;

		$request->invoice = new Invoice();

		$request->encrypt($this->cert_path);

		return $request;
	}
}