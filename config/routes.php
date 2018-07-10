<?php

$app->get('/user/{id}', function ($request, $response, $args) use ($container) {
    return (new \Api\Finance\Application\Controller\UserController($container))->getUser($args);
});


$app->get('/home', function($request, $response, $args) {
    return $response->withStatus(200)->write('Second route.');
});