<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('test', 'Home::index');

$routes->get('/', 'Home::landing');
$routes->get('about', 'Home::about');
$routes->get('resume', 'Home::resume');
$routes->get('services', 'Home::services');
$routes->get('portfolio', 'Home::portfolio');