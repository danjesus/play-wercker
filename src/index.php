<?php

require __DIR__.'/../vendor/autoload.php';

use Respect\Rest\Router;

$router = new Router();

$router->get('/', function() {
  echo "Can Play Wercker";
});
