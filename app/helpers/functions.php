<?php

use app\models\GoogleOauthToken;
use Hybridauth\Provider\Google;
use app\models\AmoOauthToken;

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

function getLeadById($leadId, $oauthToken)
{
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://vkaftancikov.amocrm.ru/api/v4/leads/' . $leadId,
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

function appendToSheet(string $id, array $token, $data)
{
    $client = new Google_Client();

    $client->setAccessToken(['access_token' => $token['access_token'], 'expires_in' => $token['expires_in']]);

    $service = new Google_Service_Sheets($client);

    try {
        $range = 'A1:D1';

        $values = [$data];

        $body = new Google_Service_Sheets_ValueRange([
            'values' => $values
        ]);
        $params = [
            'valueInputOption' => 'USER_ENTERED'
        ];

        $result = $service->spreadsheets_values->append($id, $range, $body, $params);
        printf("%d cells appended.", $result->getUpdates()->getUpdatedCells());
    } catch (Exception $error) {
        echo $error->getMessage();
    }
}

/**
 * @throws \Hybridauth\Exception\Exception
 */
function getGoogleAuthToken()
{
    $config = [
        'callback' => $_ENV['GOOGLE_CLIENT_CALLBACK_URI'],
        'keys'     => [
            'id' => $_ENV['GOOGLE_CLIENT_ID'],
            'secret' => $_ENV['GOOGLE_CLIENT_SECRET']
        ],
        'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
        'authorize_url_parameters' => [
            'approval_prompt' => 'force',
            'access_type' => 'offline'
        ]
    ];
    $token = GoogleOauthToken::findFirst();
    if (!$token || $token['expires_at'] < time()) {
        $adapter = new Google($config);
        $adapter->authenticate();
        $googleOauthToken = $adapter->getAccessToken();

        if(!$token) {
            $token = new GoogleOauthToken();
        }

        $token->assign([
            'access_token' => $googleOauthToken['access_token'],
            'refresh_token' => null,
            'expires_in' => $googleOauthToken['expires_in'],
            'expires_at' => $googleOauthToken['expires_at'],
            'token_type' => $googleOauthToken['token_type']
        ]);
        $token->save();
    }

    return $token->access_token;
}

function getAmoCrmAuthToken()
{
    $token = AmoOauthToken::findFirst();
    if(!$token) {
        $amoOauthToken = amoAuth();
        $token = new AmoOauthToken();
        $token->assign($amoOauthToken);
        $token->save();
        return $token->access_token;
    }
    if ($token->expires_at < time()) {
        $amoOauthToken = amoRefreshToken($token->refresh_token);
        $token->assign($amoOauthToken);
        $token->save();
    }

    return $token->access_token;
}

function amoAuth()
{
    $link = 'https://' . $_ENV['AMO_CLIENT_SUBDOMAIN'] . '.amocrm.ru/oauth2/access_token'; //Формируем URL для запроса
    $data = [
        'client_id' => $_ENV['AMO_CLIENT_ID'],
        'client_secret' => $_ENV['AMO_CLIENT_SECRET'],
        'redirect_uri' => $_ENV['AMO_CLIENT_REDIRECT_URI'],
        'grant_type' => $_ENV['AMO_CLIENT_GRANT_TYPE'],
        'code' => $_ENV['AMO_CLIENT_SECRET_CODE']
    ];

    $curl = curl_init();
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
    curl_setopt($curl,CURLOPT_URL, $link);
    curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
    curl_setopt($curl,CURLOPT_HEADER, false);
    curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
    $out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);

    $code = (int)$code;
    $errors = [
        400 => 'Bad request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not found',
        500 => 'Internal server error',
        502 => 'Bad gateway',
        503 => 'Service unavailable',
    ];

    try
    {
        if ($code < 200 || $code > 204) {
            throw new Exception($errors[$code] ?? 'Undefined error', $code);
        }
    }
    catch(Exception $e)
    {
        die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
    }

    $response = json_decode($out, true);

    return [
        'access_token' => $response['access_token'],
        'refresh_token' => $response['refresh_token'],
        'expires_in' => $response['expires_in'],
        'expires_at' => time() + $response['expires_in'],
        'token_type' => $response['token_type']
    ];
}

function amoRefreshToken($refreshToken)
{
    $link = 'https://' . $_ENV['AMO_CLIENT_SUBDOMAIN'] . '.amocrm.ru/oauth2/access_token';

    $data = [
        'client_id' => $_ENV['AMO_CLIENT_ID'],
        'client_secret' => $_ENV['AMO_CLIENT_SECRET'],
        'redirect_uri' => $_ENV['AMO_CLIENT_REDIRECT_URI'],
        'grant_type' => $_ENV['AMO_CLIENT_GRANT_TYPE'],
        'refresh_token' => $refreshToken,
    ];

    $curl = curl_init(); //Сохраняем дескриптор сеанса cURL
    curl_setopt($curl,CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl,CURLOPT_USERAGENT,'amoCRM-oAuth-client/1.0');
    curl_setopt($curl,CURLOPT_URL, $link);
    curl_setopt($curl,CURLOPT_HTTPHEADER,['Content-Type:application/json']);
    curl_setopt($curl,CURLOPT_HEADER, false);
    curl_setopt($curl,CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($curl,CURLOPT_POSTFIELDS, json_encode($data));
    curl_setopt($curl,CURLOPT_SSL_VERIFYPEER, 1);
    curl_setopt($curl,CURLOPT_SSL_VERIFYHOST, 2);
    $out = curl_exec($curl); //Инициируем запрос к API и сохраняем ответ в переменную
    $code = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    curl_close($curl);
    $code = (int)$code;
    $errors = [
        400 => 'Bad request',
        401 => 'Unauthorized',
        403 => 'Forbidden',
        404 => 'Not found',
        500 => 'Internal server error',
        502 => 'Bad gateway',
        503 => 'Service unavailable',
    ];

    try
    {
        if ($code < 200 || $code > 204) {
            throw new Exception(isset($errors[$code]) ? $errors[$code] : 'Undefined error', $code);
        }
    }
    catch(Exception $e)
    {
        die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
    }

    $response = json_decode($out, true);

    return [
        'access_token' => $response['access_token'],
        'refresh_token' => $response['refresh_token'],
        'expires_in' => $response['expires_in'],
        'expires_at' => time() + $response['expires_in'],
        'token_type' => $response['token_type']
    ];
}