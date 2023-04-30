<?php

use Hybridauth\Provider\Google;

require_once BASE_PATH . '/vendor/autoload.php';

const GOOGLE_CLIENT_ID = '170736721093-ef2hrocttef8pqlukm6ujt3n35rqbl67.apps.googleusercontent.com';
const GOOGLE_CLIENT_SECRET = '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';

$config = [
    'callback' => 'https://dev.viovan.world/callback',
    'keys'     => [
        'id' => GOOGLE_CLIENT_ID,
        'secret' => GOOGLE_CLIENT_SECRET
    ],
    'scope'    => 'https://www.googleapis.com/auth/spreadsheets',
    'authorize_url_parameters' => [
        'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
        'access_type' => 'offline'
    ]
];

$adapter = new Google($config);