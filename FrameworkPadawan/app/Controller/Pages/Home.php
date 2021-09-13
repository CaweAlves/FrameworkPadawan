<?php

namespace App\Controller\Pages;

use \App\Utils\View;

Class Home {

    /**
     * Método responsável por retornar o conteúdo da Home
     * @return string 
     */
    public static function getHome(){
        return View::render('pages/home', [
            'Id' => '1',
            'Titulo' => 'Titulo',
            'Text' => 'Texto'
        ]);
    }

}