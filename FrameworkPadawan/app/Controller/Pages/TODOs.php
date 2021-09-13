<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Api\RequestApi;;

Class TODOs {

    
    private static function getHeader(){
        return View::render('pages/header');
    }

    private static function getFooter(){
        return View::render('pages/footer');
    }


    public static function getTableTODOs(){
        return View::render('pages/tableTODOs', [
            'Id'     => RequestApi::curlApiTODOs('id'),
            'Titulo' =>  RequestApi::curlApiTODOs('title'),
            'Status'  => RequestApi::curlApiTODOs('completed'),
            'Autor'  => RequestApi::curlApiTODOs('userId'),]);        
    }


     /**
     * Método responsável por retornar o conteúdo da pagina TODOs
     * @return string 
     */
    public static function getTODOs(){
        return View::render('pages/TODOs', [
            'footer'    => self::getFooter(),
            'tableTODOS' => self::getTableTODOs(),
            'header'    => self::getHeader()
        ]);
    }
}