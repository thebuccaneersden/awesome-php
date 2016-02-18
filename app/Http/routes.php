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
    return $app->version();
});

$app->get('hello-world', function () use ($app) {
  return "Why hello to you, sir. May I have your name please?\n";
});

$app->post('hello-world', 'ExampleController@identify');

$app->get('factorial/{iterations}', 'ExampleController@computeFactorial');

$app->get('hit-example-site', 'ExampleController@hitExampleSite');