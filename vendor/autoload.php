<?php
require "vendor/autoload.php";
$access_token = 'yu56tYI9HSbJKEU5XZlj384x3iBbqFAhw4Rwo3gHFXbr6Iarwn/OXdS2alJeRbcQx4JSVAdNYgk4zf2vaEOocpec3KdY70OEOKhpxvIqlyHb1Ct4I/Qt26LPlgmPP/hWYcD/+T+yx2s3gjoaWEa2NgdB04t89/1O/w1cDnyilFU=';
$channelSecret = '6c2b4bdfdd235e29a7257a6288f1e43f';
$idPush = 'U3e3b9ec49b333c9e1450a072f6d20ed4'
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);
$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($idPush, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
