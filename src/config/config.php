<?php

return array(
	'settings' => array(
		'environment'	=>	'sandbox',	// 'sandbox' or 'production'
		'sandbox_url'	=>	'http://sandboxsecure.mobilpay.ro',
		'payment_url'	=>	'http://secure.mobilpay.ro',
		'certificates_path'		=>	__DIR__.'/../certificates/',	// directory which holds 'public.cer' and 'private.key'
		'public_cer'	=>	'public.cer',
		'private_key'	=>	'private.key',
		'signature'		=>	'XXXX-XXXX-XXXX-XXXX-XXXX',
		'confirm_url'	=>	'/mobilpay/confirm',
		'return_url'	=>	'/cart/finish',
	)
);
