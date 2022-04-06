<?php

namespace app\controllers;
use app\classes\Store;

class Main {
    
    public function index(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'index',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

    public function teste(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'teste',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

    public function erro404(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'erro404',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

    public function manutencao(){

        Store::Layout([
            'layouts/html_header',
            'layouts/header',
            'manutencao',
            'layouts/footer',
            'layouts/html_footer'
        ]);
    }

}
