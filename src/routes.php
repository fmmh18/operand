<?php

use App\controller\LogradouroController;
use Slim\App;

return function (App $app) {
    $container = $app->getContainer();


    $app->get('/api/cep/{cep}',LogradouroController::class.":buscarCEP");
    $app->get('/api/endereco/{endereco}',LogradouroController::class.":buscarEndereco");

};
