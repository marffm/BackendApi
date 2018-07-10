<?php

date_default_timezone_set('America/Sao_Paulo');

require_once './bootstrap.php';

$app = new \Slim\App(['settings' => $config]);

require_once '../config/container.php';
require_once '../config/routes.php';


$app->run();

