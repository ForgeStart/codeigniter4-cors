<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->group('api', ['filter' => 'cors'], function($routes) {
    $routes->get('example', 'Home::api_example_get');
    $routes->post('example', 'Home::api_example_post');
    $routes->options('(:any)', '');
    // ... other routes
});