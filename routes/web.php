<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'forca'], function () use ($router) {
    
    $router->post('adicionar', ['uses' => 'Forca\ForcaController@adicionar']);
    $router->post('pergunta_aleatoria', ['uses' => 'Forca\ForcaController@perguntaAleatoria']);
    $router->post('registrar_jogo', ['uses' => 'Forca\ForcaController@registrarJogo']);

});
