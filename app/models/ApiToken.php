<?php

namespace app\models;

use Phalcon\Mvc\Model;
class ApiToken extends Model
{
    public function initialize()
    {
        $this->setSource('api_tokens');
    }
}