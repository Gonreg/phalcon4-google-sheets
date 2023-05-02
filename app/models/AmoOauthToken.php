<?php

namespace models;

use Phalcon\Mvc\Model;

class AmoOauthToken extends Model
{
    public function initialize()
    {
        $this->setSource('amo_oauth_token');
    }
}