<?php

$city = $_POST['city'];

$api = "6a6f46cb428b5c9fc6862ac1231b1548";

$url = "https://api.openweathermap.org/data/2.5/weather?q=$city&appid=$api&units=metric";

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($curl);

curl_close($curl);

$data = json_decode($response, true);

echo "City : ".$data['name']."<br>";
echo "Temp : ".$data['main']['temp']." °C<br>";
echo "Humidity : ".$data['main']['humidity']." %<br>";
echo "Weather : ".$data['weather'][0]['main'];