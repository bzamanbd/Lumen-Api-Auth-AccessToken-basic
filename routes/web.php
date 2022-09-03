<?php

/** @var \Laravel\Lumen\Routing\Router $router */


// $router->get('/data', 'MemberController@showData');

$router->get('/data', ['middleware'=>'auth','uses'=> 'MemberController@showData']);