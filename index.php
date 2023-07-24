<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: api_key
$config = YCloud\Client\Configuration::getDefaultConfiguration()->setApiKey('X-API-Key', 'ac4ed5a6e86275ce731845454f83270');


$apiInstance = new YCloud\Client\Api\BalanceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    //$result = $apiInstance->retrieve();
	$clphone="919317579316";
							$message ="Test Message API";
							$sender_id ="CLICKSMS";
							$gateway_url = "https://api.ycloud.com/v2/sms";
							$ch = curl_init();

							curl_setopt_array($ch, [
							  CURLOPT_URL => $gateway_url,
							  CURLOPT_RETURNTRANSFER => true,
							  CURLOPT_ENCODING => "",
							  CURLOPT_MAXREDIRS => 10,
							  CURLOPT_TIMEOUT => 30,
							  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
							  CURLOPT_CUSTOMREQUEST => "POST",
							  CURLOPT_POSTFIELDS => "{\"to\":\"919317579316\",\"text\":\"test message\",\"senderId\":\"CLICKSMS\"}",
							  CURLOPT_HTTPHEADER => [
								"Content-Type: application/json",
								"X-API-Key: ac4ed5a6eerw3334w318d9f232f83270"
							  ],
							]);

							$result = curl_exec($ch);
                            $response = json_decode($result, true);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BalanceApi->retrieve: ', $e->getMessage(), PHP_EOL;
}							