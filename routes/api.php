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
    
    
    $app->get('/', 'TestController@index');
    $app->post('like', 'TestController@postLike');
    $app->delete('/{id:[0-9]+}', 'TestController@delete');
    $app->get('/{id:[0-9]+}', 'TestController@getHero');
    
    $app->post('heroes/{id:[0-9]+}', 'TestController@postEdit');
    $app->post('heroes', 'TestController@postCreate');
    $app->post('upload', 'TestController@upload');
    