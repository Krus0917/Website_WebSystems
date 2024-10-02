<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('test', 'Home::index');

$routes->get('/', 'Home::landing');
$routes->get('about', 'Home::about');
$routes->get('catalog', 'Home::catalog');