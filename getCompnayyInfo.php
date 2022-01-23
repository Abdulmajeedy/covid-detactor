<?php
session_start();
$curl = curl_init();

$apiKey = '48a81191e8msh19e945a234792f4p1807ccjsn4affcc08fc14';
$countryName = $_POST['countryName'];


curl_setopt_array($curl, [
	CURLOPT_URL => "https://covid-19-data.p.rapidapi.com/country?name=".$countryName,
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: covid-19-data.p.rapidapi.com",
		"x-rapidapi-key: 48a81191e8msh19e945a234792f4p1807ccjsn4affcc08fc14"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	//echo $response;
	//$_SESSION['response'] = $response;
	header('Location:result.php?response='.$response);
}