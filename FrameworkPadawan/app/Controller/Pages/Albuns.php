<?php

namespace App\Controller\Pages;

use \App\Utils\View;
use \App\Model\Api\RequestApi;

Class Albuns {

    private static function getHeader(){
        return View::render('pages/header');
    }

    private static function getFooter(){
        return View::render('pages/footer');
    }

    private static function getTableAlbuns(){
        return View::render('pages/tableAlbuns', [
        'albumId'     => RequestApi::curlApiPhotos('albumId'),
        'Id'          => RequestApi::curlApiPhotos('id'),
        'Titulo'      =>  RequestApi::curlApiPhotos('title'),
        'Texto'       => RequestApi::curlApiPhotos('url'),
        'Photo'       => RequestApi::curlApiPhotos('thumbnailUrl'),]);
    }

    /**
     * Método responsável por retornar o conteúdo da página Albuns
     * @return string 
     */
    public static function getAlbuns(){
        return View::render('pages/Albuns', [
            'footer'    => self::getFooter(),
            'tableAlbuns' => self::getTableAlbuns(),
            'header'    => self::getHeader()
        ]);
    }

}