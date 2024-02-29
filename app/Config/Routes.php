<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/room', 'Home::room');
$routes->get('/contact', 'Home::contact');
$routes->get('/login', 'Home::login');


