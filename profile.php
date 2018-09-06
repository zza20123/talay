<?php


$access_token = 'CuFR5ZiKy2sbFsJGFWmg6FTJ/TisPc19JV/IzCjql3o8btPdk2q25MvZaITc1BJnRsR703gwlQCm+BYeUXRfWT6vrURmGIlPDAQsVl7oylJiM40DD4j4DpKKefkCiRtikFQFp6I9NzGJC0Q+vDu7kAdB04t89/1O/w1cDnyilFU=':
$userId = '';

$url = 'https://api.line.me/v2/bot/profile/'.$userId;

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

