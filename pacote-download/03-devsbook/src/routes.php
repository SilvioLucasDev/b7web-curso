<?php

use core\Router;

$router = new Router();

$router->get('/', 'HomeController@index');

$router->get('/login', 'LoginController@signin');
$router->post('/login', 'LoginController@signinAction');

$router->get('/cadastro', 'LoginController@signup');
$router->post('/cadastro', 'LoginController@signupAction');

$router->post('/post/new', 'PostController@new');

// $router->get('/pesquisar', 'LoginController@signin');
// $router->get('/perfil', 'LoginController@signin');
// $router->get('/sair', 'LoginController@signin');
// $router->get('/amigos', 'LoginController@signin');
// $router->get('/fotos', 'LoginController@signin');
// $router->get('/config', 'LoginController@signin');