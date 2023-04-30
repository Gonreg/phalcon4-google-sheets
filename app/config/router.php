<?php

$router = $di->getRouter();
// Define your routes here

$router->handle($_SERVER['REQUEST_URI']);

$router->add(
    '/test',
    [
        'controller' => 'index',
        'action' => 'test'
    ]
);

$router->add(
    '/callback',
    [
        'controller' => 'index',
        'action' => 'index',
    ]
);