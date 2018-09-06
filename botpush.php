<?php



require "vendor/autoload.php";

$access_token = 'CuFR5ZiKy2sbFsJGFWmg6FTJ/TisPc19JV/IzCjql3o8btPdk2q25MvZaITc1BJnRsR703gwlQCm+BYeUXRfWT6vrURmGIlPDAQsVl7oylJiM40DD4j4DpKKefkCiRtikFQFp6I9NzGJC0Q+vDu7kAdB04t89/1O/w1cDnyilFU=';

$channelSecret = '496241cfaf7a3ed50afd51e1d37c06f0';

$pushID = 'U7ef7a449f2a5c2057eacfc02ba2eb286';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();







