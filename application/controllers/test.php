<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Test extends CI_Controller {
	

    private $tokenUrl = 'https://api.sandbox.paypal.com/v1/oauth2/token';
    private $paymentUrl = 'https://api.sandbox.paypal.com/v1/payments/payment';
    private $client = 'Aa7l5hBvO4ycTsVK3eihOy-K7nZ-k-_ldrz2DBTY8Tq-_C9f76pm-mutooOM';
    private $secret = 'EO0UlxBuV4BOSCp5tdkPkmjPQ3HNIvIST1y28JHDPiKbBXZ0ZcOv59Yb8s0t';
    private $token;
    private $tokenHandle;
    private $paymentHandle;

	public function index()
	{
		//$this->load->view('test_view');
		$this->buildPaymentRequest('20','nice product');
	}
    public function __construct()
    {
        $this->tokenHandle = curl_init($this->tokenUrl);
        $this->buildTokenRequest();
    }

    public function buildTokenRequest()
    {
        $header = array(
            'Accept: application/json',
            'Accept-Language: en_US'
        );

        $user = $this->client . ':' . $this->secret;

        $data = 'grant_type=client_credentials';

        curl_setopt($this->tokenHandle, CURLOPT_HTTPHEADER, $header);
        curl_setopt($this->tokenHandle, CURLOPT_USERPWD, $user);
        curl_setopt($this->tokenHandle, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->tokenHandle, CURLOPT_RETURNTRANSFER, true);

        $this->commitTokenRequest();
    }

    public function commitTokenRequest()
    {
        $response = json_decode(curl_exec($this->tokenHandle));

        $this->token = $response->access_token;

        curl_close($this->tokenHandle);
    }

    public function buildPaymentRequest($cost = '', $description = '')
    {
        $this->paymentHandle = curl_init($this->paymentUrl);

        $header = array(
            'Accept: application/json',
            'Content-Type: application/json',
            'Accept-Language: en_US',
            'Authorization:Bearer ' . $this->token
        );
        // print_r($this->token);
        $data = array(
            'intent' => 'sale',
            'payer' => array(
                'payment_method' => 'credit_card',
                'funding_instruments' => array(
                        array(
                            'credit_card' => array(
                                'number' => '5500005555555559',
                                'type' => 'mastercard',
                                'expire_year'=> '2018',
                                'first_name'=> 'Joe',
                                'last_name' => 'Shopper'
                            )
                        )
                )
            ),
            'transactions' => array(
                    array(
                        'amount' => array(
                            'total' => '39.54',
                            'currency' => 'USD'
                        ),
                        'description' => 'This is my descrription for hats'
                    )
            )
        );
        $d = json_encode($data);

        curl_setopt($this->paymentHandle, CURLOPT_HTTPHEADER, $header);
        //curl_setopt($$this->paymentHandle, CURLOPT_HTTPHEADER, true);
        curl_setopt($this->paymentHandle, CURLOPT_POSTFIELDS, $d);
        curl_setopt($this->paymentHandle, CURLOPT_RETURNTRANSFER, true);

        print_r($this->commitPaymentRequest());
    }

    public function commitPaymentRequest()
    {
        $response = json_decode(curl_exec($this->paymentHandle));

        var_dump($response);

        return curl_close($this->paymentHandle);
    }
}