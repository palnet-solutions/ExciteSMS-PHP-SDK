<?php

$parameters = [
        'recipient' => '+260965683486',
        'sender_id' => 'ExciteTesr',
        'message' => 'test message',
        'type' => 'plain',
        'schedule_time' => '2021-12-20 07:20',
];

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://gateway.excitesms.tech/api/v3/sms/send?'.http_build_query($parameters),
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Accept: application/json',
    'Authorization: Bearer 10|R0gkjJJrc7z3uJExrYUBrW55qQONVrmwBYArTjIA',
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;
