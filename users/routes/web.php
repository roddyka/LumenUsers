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

$router->get("/api/users", "UsersController@getAll");

$router->group(['prefix'=> "/api/user"], function() use ($router){   
    $router->get("/{id}", "UsersController@get");
    $router->post("", "UsersController@store");
    $router->put("/{id}", "UsersController@update");
    $router->delete("/{id}", "UsersController@destroy");
});


