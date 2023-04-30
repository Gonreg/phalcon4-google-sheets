<?php
declare(strict_types=1);

require_once BASE_PATH . '/vendor/autoload.php';
require_once APP_PATH . '/helpers/sheetFunctions.php';

use Hybridauth\Provider\Google;
use app\models\ApiToken;

class IndexController extends ControllerBase
{
    private const GOOGLE_CLIENT_ID = '170736721093-ef2hrocttef8pqlukm6ujt3n35rqbl67.apps.googleusercontent.com';
    private const GOOGLE_CLIENT_SECRET = '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';
    private array $config = [
        'callback' => 'https://dev.viovan.world/callback',
        'keys'     => [
            'id' => self::GOOGLE_CLIENT_ID,
            'secret' => self::GOOGLE_CLIENT_SECRET
        ],
        'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
        'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
        ]
    ];

    /**
     * @throws \Hybridauth\Exception\Exception
     */
    public function sheetAction()
    {
//        file_put_contents('data.json', json_encode($_POST), FILE_APPEND);
        $adapter = new Google($this->config);
        $adapter->authenticate();
        $accessToken = $adapter->getAccessToken();
//        appendToSheet('1hPLuV0t7H9QfPp4N_YJ-A7vfdMvb18-9WFAcDdSTy5Q', $token);
        $token = new ApiToken();
        $token->acessToken = $accessToken;
        $token->save();
    }

    public function callbackAction()
    {
        echo 'test';
    }

    public function testAction()
    {
        file_put_contents('data.json', json_encode($_POST), FILE_APPEND);
        echo 'Success write';
    }

    public function indexAction()
    {
        $token = ApiToken::findFirst(1);
        $this->view->token = $token->acess_token;
    }
}

