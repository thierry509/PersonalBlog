<?php
require '../vendor/autoload.php';
use Ht\Blog\Controllers\PostControllers\PostControllers;
use Ht\Blog\Utils\Router;
define('viewPAth', dirname(__DIR__) . "/src/view");
$router = new Router();
$router->get('/', ['Ht\Blog\Controllers\MainController', 'home'], 'home');
$router->get('/recentPost', ['Ht\Blog\Controllers\PostControllers\PostControllers', 'recentPost'], 'recentPost');
$router->get('/popularPost', ['Ht\Blog\Controllers\PostControllers\PostControllers', 'popularPost'], 'popularPost');
$router->get('/postAll', ['Ht\Blog\Controllers\PostControllers\PostControllers', 'allPost'], 'allPost');
$router->get('/blog', ['Ht\Blog\Controllers\PostControllers\PostControllers', 'postIndex'], 'postHome');
$router->get('/comment', ['Ht\Blog\Controllers\PostControllers\PostControllers', 'comment']);
$router->run();
