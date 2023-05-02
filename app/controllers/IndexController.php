<?php
declare(strict_types=1);

require_once BASE_PATH . '/vendor/autoload.php';
require_once APP_PATH . '/helpers/functions.php';

use Hybridauth\Provider\Google;

class IndexController extends ControllerBase
{
    /**
     * @throws \Hybridauth\Exception\Exception
     */
    public function sheetAction()
    {
        $googleOauthToken = getGoogleAuthToken();
        $amoOauthToken = getAmoCrmAuthToken();

        $leadId = $_POST['leads']['status'][0]['id'];
        $leadData = json_decode(getLeadById($leadId, $amoOauthToken));
        $userEmail = json_decode(getUserById($leadData->responsible_user_id, $amoOauthToken))->email;

        appendToSheet($_ENV['GOOGLE_SHEET_ID'], $googleOauthToken, [$leadData->name, $leadData->id, $leadData->price, $userEmail]);

    }

    public function callbackAction()
    {
       /* try {
            $adapter = new Google($this->config);
            $adapter->authenticate();
            $accessToken = $adapter->getAccessToken();
            $token = ApiToken::findFirst();
            $refreshToken = $adapter->refreshAccessToken();

            if (!$token) {
                $token = new ApiToken();
                $token->assign([
                    'access_token' => json_encode($accessToken)
                ]);
                $token->create();
            }
            if (json_decode($token->access_token)->expires_at < time()) {
                $adapter = new Google($this->config);
                $adapter->authenticate();
                $accessToken = $adapter->getAccessToken();
                $token->assign([
                    'access_token' => json_encode($accessToken)
                ]);
                $token->save();
            }


            $subdomain = 'vkaftancikov'; //Поддомен нужного аккаунта
            $link = 'https://' . $subdomain . '.amocrm.ru/oauth2/access_token'; //Формируем URL для запроса

            $data = [
                'client_id' => '4cbd5e04-45db-49cd-96c3-ce12d8200326',
                'client_secret' => '3SWYWcT2sjs42RYZzhvtygIyWYudvDiX2pUl8vvWysJw0AMVmlaivZLJ78cFKzdx',
                'grant_type' => 'authorization_code',
                'code' => 'def5020045cfa63e5fa3a8e357c3e82bf3978311be8c18bd221d508a8e4176cd12d449d434e5f13818dad71b3363fc0ba6e3243630d6ccf36a3c8c7d73b3373798d6a7fa0d6b3365e114ad1f1ebd1e8f48f74bd8275ffd01b9edad46911fc151384e653254425cd2c96ac888a4f4a1bb63d07eb7642ba4a5be0bd5ad9999e31c4b91642fbf5d66875e73da4557372159b95fb3824b04e9e470caf86debc03f75319222839ad8b47d4cb0f51cee28a3349f472e105c7d24284b7ee8533e1ac55fc3ffcedef9005dfc3bb1c1d9d2b061501a7e609dae0e94f7916dc45c9580e3b368238ac5025b757c9d6dfa08e4eb63dde0c08f358f1bb48ca46d12a1c3db02cec2d1aa920aa73f444dd9b79e676c129d6f2b0cf5d8095e02b202a16d0b75ca701d72cb89911174f07f7974b071cfc809bee2dc2b18fd477ecff6dca525140aa0eb6403c929aa0a6165d1a49f8c4f1522a99f478f46aba08584bd3184266846222150c88afc64922f8ef555a73cf5c813f632ad3838521037d7a5e24f1929f52a930c6a1d395e1fa9922c7145d8d1132f095b7e6bacddd5d9acad8a0829ed550cf08d65f73373df7986cd12f58a8e170c73c93d7ffc172a40c2c28ba524e909e9b599f222e575bcf204cd68b1b123f3e8fbf5687306f099ea8ee29f21062185ff3adb7e25cc8202ca',
                'redirect_uri' => 'https://dev.viovan.world',
            ];


            $curl = curl_init(); //Сохраняем дескриптор сеанса cURL
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_USERAGENT, 'amoCRM-oAuth-client/1.0');
            curl_setopt($curl, CURLOPT_URL, $link);
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type:application/json']);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 1);
            curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
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

            try {
                if ($code < 200 || $code > 204) {
                    throw new Exception($errors[$code] ?? 'Undefined error', $code);
                }
            } catch (Exception $e) {
                die('Ошибка: ' . $e->getMessage() . PHP_EOL . 'Код ошибки: ' . $e->getCode());
            }


            $response = json_decode($out, true);

            $access_token = $response['access_token']; //Access токен
            $refresh_token = $response['refresh_token']; //Refresh токен
            $token_type = $response['token_type']; //Тип токена
            $expires_in = $response['expires_in']; //Через сколько действие токена истекает

            file_put_contents('amoToken.json', $out);


        } catch (Exception $error) {
            echo $error->getMessage();
        }*/
        echo 'А зачем этот метод?)';
    }

    public function testAction()
    {
        var_dump(getGoogleAuthToken());
        /*$data = $_POST;
        $leadId = $data['leads']['status']['id'];

        $amoData = json_decode(file_get_contents('amoToken.json', true));
        $token = $amoData['access_token'];

        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://vkaftancikov.amocrm.ru/api/v4/leads/2425903',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Content-Type: application/json',
                'Authorization: Bearer ' . $token,
                'Cookie: session_id=m5dhdoff21jp518ivetocfjg0q; user_lang=ru'
            ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);


        file_put_contents('data.json', json_encode($response), FILE_APPEND);
        echo 'Success write';*/
        echo 'А зачем этот метод';
    }

    public function indexAction()
    {
        var_dump(getAmoCrmAuthToken());
        exit(1);

    }
}

