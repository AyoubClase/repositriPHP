<?php
$apiKey = "e2c2408a6bbdc7d4a3af53ecfb8bb140";
$cityId = "Madrid";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

$temperatura = $data['main']['temp'];
$temperatura_celcius = round($temperatura - 273.15);
echo "La temperatura en Madrid es de ". $temperatura_celcius ;


$cityId2 = "London";
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId2 . "&lang=en&units=metric&APPID=" . $apiKey;

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();

$temperatura2 = $data2['main']['temp'];
$temperatura_celcius2 = round($temperatura2 - 273.15);
echo "La temperatura en Londres es de ". $temperatura_celcius2 ;

?>