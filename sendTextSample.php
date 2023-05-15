<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://clicksend.p.rapidapi.com/sms/send",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => json_encode([
        'messages' => [
            [

                'source' => 'mashape',
                'from' => '+639061229183',
                'body' => 'This is a message from roneil',
                'to' => '+639534686569',
                'custom_string' => 'This is a message from roneil'
            ]
        ]
    ]),
    CURLOPT_HTTPHEADER => [
        "Authorization: Basic ZG9uZ2hpbmJhbjA5MjhAZ21haWwuY29tOlB1cnBsZWJveDUyMjJA",
        "Content-Type: application/json",
        "X-RapidAPI-Host: clicksend.p.rapidapi.com",
        "X-RapidAPI-Key: 21fccc639fmsh043c6176002db99p112a8ajsnf8f0d6718ca8",
        "content-type: application/json"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    echo $response;
}
