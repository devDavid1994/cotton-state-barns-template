<?php

session_start();

//Setup base URL
$url = 'https://test.systemavo.com/api';

//Grab the lat/lon from the post
$zip = $_POST['zip'];

// get cURL resource
$ch = curl_init();

// set url
curl_setopt($ch, CURLOPT_URL, $url.'/dealershiplocater/'.$zip.'/50/1');

// set method
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

// return the transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// set headers
curl_setopt($ch, CURLOPT_HTTPHEADER, [
	'Cookie: ci_session=3c90a069ffd0159f23928c3a32177142260e2047',
]);

// send the request and save response to $response
$response = curl_exec($ch);

// stop if fails
if (!$response) {
	die('Error: "' . curl_error($ch) . '" - Code: ' . curl_errno($ch));
}

//Save the response data into the session for use in the page header
$response_obj = json_decode($response);
$_SESSION['dealer_info'] = $response_obj->data[0];

//Output the response
header('Content-Type: application/json; charset=utf-8');
echo $response;

// close curl resource to free up system resources
curl_close($ch);


