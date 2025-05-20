<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/park/(:num)', 'Home::show/$1');
$routes->get('/park/new', 'Home::new', ['as'=>'new-park']);

service('auth')->routes($routes);
$routes->post('/park/add', 'Home::add');