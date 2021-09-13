<?php 

require __DIR__.'/includes/app.php';

use \App\Http\Router;

// INICIA O ROUTER
$obRouter = new Router(URL);

// INCLUI AS ROTAS DE PAGINAS
INCLUDE __DIR__.'/routes/pages.php';


// IMPRIMO O RESPONSE DA ROTA
$obRouter->run()->sendResponse();

// DEBUGE
// echo "<pre>";
// print_r($variavel);
// echo "</pre>";

?>