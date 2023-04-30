<?php

$router = $di->getRouter();
// Define your routes here

$router->handle($_SERVER['REQUEST_URI']);

// API

$router->add(
    '/api/add_to_sheet',
    [
        'controller' => 'index',
        'action' => 'sheet'
    ]
);

$router->add(
    '/api/callback',
    [
        'controller' => 'index',
        'action' => 'callback',
    ]
);

// WEB

$router->add(
  '/',
  [
      'controller' => 'index',
      'action' => 'index'
  ]
);