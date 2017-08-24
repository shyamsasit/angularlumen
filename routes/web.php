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
    
    $app->get('/', function () use ($app) {
        return $app['view']->make('index');
    });
    $app->get('heroes', function () use ($app) {
        return $app['view']->make('index');
    });
    
    $app->get('heroes/{id:[0-9]+}', function () use ($app) {
        return $app['view']->make('index');
    });
    $app->get('heroes/edit/{id:[0-9]+}', function () use ($app) {
        return $app['view']->make('index');
    });