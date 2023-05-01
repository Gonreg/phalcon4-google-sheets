<?php

require_once BASE_PATH . '/vendor/autoload.php';

use Hybridauth\Provider\Google;
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