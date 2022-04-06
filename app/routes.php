<?php

$rotas = [
    'index' => 'main@index',
    'teste' => 'main@teste',
    'erro404' => 'main@erro404',
    'manutencao' => 'main@manutencao',
];

$acao = ROUTE_MAIN;

if(isset($_GET['a'])){
    if(!key_exists($_GET['a'], $rotas)){
        $acao = 'erro404';
    }else{
        $acao = $_GET['a'];
    }
}

$partes = explode('@', $rotas[$acao]);
$controlador = 'app\\controllers\\'.ucfirst($partes[0]);
$metodo = $partes[1];

$ctr = new $controlador();
$ctr->$metodo();
