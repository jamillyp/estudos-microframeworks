<?php

require "../bootstrap.php";

use Slim\Http\Request;
use Slim\Http\Response;

//trabalhando com agrupamento de rotas
//$app->group('/admin', function() use($app){
//    $app->get('/login', function() {
//        echo 'login'; 
//    });
//});

//trabalhando com apenas uma rota por vez
//$app->get('/login/{id}', function(Request $request, Response $response, $args) {
//    dd($args['id']);
//});

//rotas chamando o controller
$app->get('/', 'app\controllers\HomeController:index');
//$app->get('/user/update/{id}', 'app\controllers\UserController:update');
$app->get('/user/{id}', 'app\controllers\UserController:show');
$app->get('/contato', 'app\controllers\ContatoController:index');

$app->run();

