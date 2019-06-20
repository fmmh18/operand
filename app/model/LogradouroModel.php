<?php

namespace App\model;

class LogradouroModel extends Conexao
{
    public function buscarCEP($cep)
    {
        $endereco = $this->pdo->query("SELECT * FROM buscacep WHERE cep ='{$cep}'")->fetchAll(\PDO::FETCH_OBJ);
        return $endereco;
    }
    public function buscarLogradouro($logradouro)
    {
        $endereco = $this->pdo->query("SELECT * FROM buscacep WHERE lower(endereco) LIKE lower('%{$logradouro}%')")->fetchAll(\PDO::FETCH_OBJ);
        return $endereco;
    }
}