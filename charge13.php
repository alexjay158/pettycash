<?php

  $url = "https://api.paystack.co/transaction/charge_authorization";


  $fields = [

    'authorization_code' => "AUTH_1anm7dhdy5",

    'email' => "abbeyayo.aa@gmail.com",

    'amount' => "1000000"

  ];


  $fields_string = http_build_query($fields);


  //open connection

  $ch = curl_init();

  

  //set the url, number of POST vars, POST data

  curl_setopt($ch,CURLOPT_URL, $url);

  curl_setopt($ch,CURLOPT_POST, true);

  curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);

  curl_setopt($ch, CURLOPT_HTTPHEADER, array(

    "Authorization: Bearer sk_live_d3d755710f47a07fd4e6b0f436a096b928096b91",

    "Cache-Control: no-cache",

  ));

  

  //So that curl_exec returns the contents of the cURL; rather than echoing it

  //execute post

  $result = curl_exec($ch);

  echo $result;

?>
