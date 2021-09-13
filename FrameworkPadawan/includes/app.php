<?php

require __DIR__.'/../vendor/autoload.php';

use \App\Utils\View;

define('URL', 'http://localhost:8080/FrameworkPadawan'); 

// DEFINI VALOR PADRÃO DAS VARIÁVEIS
View::init([
    'URL' => URL
]);