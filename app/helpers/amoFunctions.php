<?php

require_once BASE_PATH . '/vendor/autoload.php';

function getUserById($userId, $oauthToken)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://vkaftancikov.amocrm.ru/api/v4/users/' . $userId,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json',
            'Authorization: Bearer ' . $oauthToken,
            'Cookie: session_id=m5dhdoff21jp518ivetocfjg0q; user_lang=ru'
        ),
    ));

    $response = curl_exec($curl);

    curl_close($curl);

    return $response;
}