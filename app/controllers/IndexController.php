<?php
declare(strict_types=1);




class IndexController extends ControllerBase
{

    public function indexAction()
    {
        var_dump($_SERVER['DOCUMENT_ROOT']);
        $adapter = $this->dispatcher->getParam('adapter');
        var_dump($adapter);
        die();
        /*$adapter->authenticate();
        $token = $adapter->getAccessToken();
        file_put_contents('')*/
    }

    public function testAction()
    {
        file_put_contents('data.json', json_encode($_POST), FILE_APPEND);
        echo 'Success write';
    }
}

