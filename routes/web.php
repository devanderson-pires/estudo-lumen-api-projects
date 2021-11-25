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

$router->group(['prefix' => 'api', 'middleware' => 'customAuth'], function () use ($router) {
    $router->get('projects', 'ProjectController@index');
    $router->post('projects', 'ProjectController@store');
    $router->get('projects/{id}', 'ProjectController@show');

    $router->get('projects/{id}/languages', 'LanguageController@index');

});

$router->post('api/login', 'TokenController@generate');
