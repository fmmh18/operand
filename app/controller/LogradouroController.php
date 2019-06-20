<?php

namespace App\controller;
use\App\model\LogradouroModel;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class LogradouroController
{
    public function buscarCEP(Request $request, Response $response, array $args)
    {
            $cep = $args['cep'];
            $logradouromodel = new LogradouroModel();
            $buscarcep = $logradouromodel->buscarCEP($cep);
            $response = $response->withJson($buscarcep);
            return $response;
    }
    public function buscarEndereco(Request $request, Response $response, array $args)
    {
        $endereco = $args['endereco'];
        $logradouromodel = new LogradouroModel();
        $buscarendereco = $logradouromodel->buscarLogradouro($endereco);
        $response = $response->withJson($buscarendereco);
        return $response;
    }
}