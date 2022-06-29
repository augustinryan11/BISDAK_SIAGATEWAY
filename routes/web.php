<?php

/** @var \Laravel\Lumen\Routing\Router $router */

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

$router->group(['middleware' => 'client.credentials'], function() use ($router) {

//Books for Site 1
$router->get('/books1', 'Book1Controller@index');
$router->post('/books1', 'Book1Controller@add');
$router->get('/books1/{id}', 'Book1Controller@show');
$router->put('/books1/{id}', 'Book1Controller@update'); 
$router->patch('/books1/{id}', 'Book1Controller@update'); 
$router->delete('/books1/{id}', 'Book1Controller@delete');

//Authors for Site 1
$router->get('/authors1', 'Author1Controller@index');
$router->post('/authors1', 'Author1Controller@add');
$router->get('/authors1/{id}', 'Author1Controller@show');
$router->put('/authors1/{id}', 'Author1Controller@update'); 
$router->patch('/authors1/{id}', 'Author1Controller@update'); 
$router->delete('/authors1/{id}', 'Author1Controller@delete');

//Books for Site 2
$router->get('/books2', 'Book2Controller@index');
$router->post('/books2', 'Book2Controller@add');
$router->get('/books2/{id}', 'Book2Controller@show');
$router->put('/books2/{id}', 'Book2Controller@update'); 
$router->patch('/books2/{id}', 'Book2Controller@update'); 
$router->delete('/books2/{id}', 'Book2Controller@delete');

//Authors for Site 2
$router->get('/authors2', 'Author2Controller@index');
$router->post('/authors2', 'Author2Controller@add');
$router->get('/authors2/{id}', 'Author2Controller@show');
$router->put('/authors2/{id}', 'Author2Controller@update'); 
$router->patch('/authors2/{id}', 'Author2Controller@update'); 
$router->delete('/authors2/{id}', 'Author2Controller@delete');

});