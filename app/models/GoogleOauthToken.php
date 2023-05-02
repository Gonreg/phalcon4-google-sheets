<?php

namespace app\models;

use Phalcon\Mvc\Model;
class GoogleOauthToken extends Model
{
    public function initialize()
    {
        $this->setSource('google_oauth_token');
    }
}