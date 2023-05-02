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

    /**
     * @throws \Hybridauth\Exception\Exception
     */
    public function callbackAction()
    {
        getGoogleAuthToken();
    }


    public function indexAction()
    {
        getGoogleAuthToken();
    }
}

