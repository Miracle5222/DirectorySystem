

<?php

date_default_timezone_set('America/Los_Angeles');
$script_tz = date_default_timezone_get();
strcmp($script_tz, ini_get('date.timezone'));


$dateToday = date('Y-m-d', strtotime('+1 days'));
$sql3 = "SELECT borrowed_tbl.`return_date`, student_tbl.`number` FROM borrowed_tbl INNER JOIN student_tbl ON borrowed_tbl.`student_id` = student_tbl.`student_id`";
$result3 = $conn->query($sql3);



if ($result3->num_rows > 0) {

  while ($row = $result3->fetch_assoc()) {
    if ($dateToday == $row['return_date']) {
      // $sendText = new SendText($row['number']);
      // echo $sendText->proccessText();
      $curl = curl_init();

      curl_setopt_array($curl, [
        CURLOPT_URL => "https://clicksend.p.rapidapi.com/sms/send",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => "{
      \"messages\": [
        {
          \"source\": \"Office Directory System\",
          \"from\": \"+639661337494\",
          \"body\": \"The return date of the book is due tommorow, Please return the book on time.\",
          \"to\": \"$row[number]\",
          \"custom_string\": \"this is a test\"
        }
      ]
    }",
        CURLOPT_HTTPHEADER => [
          "Authorization: Basic Um9uZWlsZ3VuZ29iYmFuc2FzNTIyMkBnbWFpbC5jb206UHVycGxlYm94NTIyMkA=",
          "Content-Type: application/json",
          "X-RapidAPI-Host: clicksend.p.rapidapi.com",
          "X-RapidAPI-Key: 21fccc639fmsh043c6176002db99p112a8ajsnf8f0d6718ca8",
          "content-type: application/json"
        ],
      ]);
      curl_exec($curl);
      curl_error($curl);
      curl_close($curl);



      // $response = curl_exec($curl);
      // $err = curl_error($curl);

      // curl_close($curl);

      // if ($err) {
      //     echo "cURL Error #:" . $err;
      // } else {
      //     echo $response;
      // }
    }
  }
}
