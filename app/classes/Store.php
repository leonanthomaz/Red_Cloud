<?php

namespace app\classes;
use Exception;

class Store {

    public static function Layout($estruturas, $dados = null){
        if(!is_array($estruturas)){
            throw new Exception('Coleção inválida');
        }

        if(!empty($dados) && is_array(($dados))){
            extract($dados);
        }

        foreach($estruturas as $estrutura){
            include('./app/views/'.$estrutura.'.php');
        }
    }

    public static function redirect($rota = ''){
        //Redirecionamento de rota
        header('Location:'.BASE_URL.'?a='.$rota);
    }
    
    public static function printData($data){
        if(is_array($data) || is_object($data)){
            echo '<pre>';
            print_r($data);
        }else{
            echo '<pre>';
            echo($data);
        }
    }
}