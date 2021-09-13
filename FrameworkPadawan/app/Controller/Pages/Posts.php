<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Api\RequestApi;

Class Posts {

    private static function getHeader(){
        return View::render('pages/header');
    }

    private static function getFooter(){
        return View::render('pages/footer');
    }

    private static function getTablePost(){
        return View::render('pages/tablePost', [
        'Id'     => RequestApi::curlApi('id'),
        'Titulo' =>  RequestApi::curlApi('title'),
        'Texto'  => RequestApi::curlApi('body'),
        'Autor'  => RequestApi::curlApi('userId'),]);
    }

    /**
     * Método responsável por retornar o conteúdo da pagina Posts
     * @return string 
     */
    public static function getPosts(){
        return View::render('pages/Posts', [
            'footer'    => self::getFooter(),
            'tablePost' => self::getTablePost(),
            'header'    => self::getHeader()
        ]);
    }

    
}