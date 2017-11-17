<?php

$ch = curl_init('https://iptoearth.expeditedaddons.com/?api_key=' . getenv('IPTOEARTH_API_KEY') . '&ip=68.10.149.45');

$response = curl_exec($ch);
curl_close($ch);

var_dump($response);
