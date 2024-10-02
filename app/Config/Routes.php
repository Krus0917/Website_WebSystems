<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::landing');
$routes->get('test', 'Home::index');
$routes->get('about', 'Home::about');
$routes->get('catalog', 'Home::catalog');