<?php
$data = json_decode(file_get_contents("php://input"), true);
$ip = $data['ip'];
$city = $data['city'];
$region = $data['region'];
$country = $data['country'];
$org = $data['org'];

file_put_contents("logs.txt", "IP: $ip | $city, $region, $country | $org\n", FILE_APPEND);
?>