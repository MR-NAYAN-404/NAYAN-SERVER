<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://facebook17.p.rapidapi.com/api/facebook/links",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "POST",
	CURLOPT_POSTFIELDS => json_encode([
		'url' => $_GET['link'];
	]),
	CURLOPT_HTTPHEADER => [
		"X-RapidAPI-Host: facebook17.p.rapidapi.com",
		"X-RapidAPI-Key: b4b824b412mshe76b690648985a8p1be8bdjsn28ea10ac6b85",
		"content-type: application/json"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
