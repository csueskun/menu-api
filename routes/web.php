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

$router->post('login', 'AuthController@login');
$router->get('check', ['middleware' => ['auth', 'example'], 'uses'=>'NegociosController@check']);
$router->get('menu/{negocio}', 'NegociosController@prepareNegocioMenu');

$router->group(['middleware' => 'auth'], function () use ($app) {
    $app->post('artisan', 'ConfigurationController@artisan');
    /**
     * Routes for resource negocio
     */
    $app->get('negocio', 'NegociosController@all');
    $app->get('negocio/{id}', 'NegociosController@get');
    $app->post('negocio', 'NegociosController@add');
    $app->put('negocio/{id}', 'NegociosController@put');
    $app->delete('negocio/{id}', 'NegociosController@remove');
    $app->get('negocio/from/user', 'NegociosController@getUserNegocio');
    $app->post('negocio/upload/file', 'NegociosController@upload');
    
    /**
     * Routes for resource user
     */
    $app->get('user', 'UsersController@all');
    $app->get('user/{id}', 'UsersController@get');
    $app->post('user', 'UsersController@add');
    $app->put('user/{id}', 'UsersController@put');
    $app->delete('user/{id}', 'UsersController@remove');
    
    /**
     * Routes for resource user
     */
    $app->get('user', 'UsersController@all');
    $app->get('user/{id}', 'UsersController@get');
    $app->post('user', 'UsersController@add');
    $app->put('user/{id}', 'UsersController@put');
    $app->delete('user/{id}', 'UsersController@remove');


    /**
     * Routes for resource producto-tipo
     */
    $app->get('producto-tipo', 'ProductoTiposController@all');
    $app->get('producto-tipo/{id}', 'ProductoTiposController@get');
    $app->post('producto-tipo', 'ProductoTiposController@add');
    $app->put('producto-tipo/{id}', 'ProductoTiposController@put');
    $app->delete('producto-tipo/{id}', 'ProductoTiposController@remove');

    /**
     * Routes for resource producto
     */
    $app->get('producto', 'ProductosController@all');
    $app->get('producto/{id}', 'ProductosController@get');
    $app->post('producto', 'ProductosController@add');
    $app->put('producto/{id}', 'ProductosController@put');
    $app->delete('producto/{id}', 'ProductosController@remove');
    $app->post('producto/upload/file', 'ProductosController@upload');


});