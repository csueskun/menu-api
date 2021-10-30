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
$app = $router;
$router->get('/', function () use ($router) {
    return $router->app->version();
});
$app->post('artisan', 'ConfigurationController@artisan');
/**
 * Routes for resource negocio
 */
$app->get('negocio', 'NegociosController@all');
$app->get('negocio/{id}', 'NegociosController@get');
$app->post('negocio', 'NegociosController@add');
$app->put('negocio/{id}', 'NegociosController@put');
$app->delete('negocio/{id}', 'NegociosController@remove');
