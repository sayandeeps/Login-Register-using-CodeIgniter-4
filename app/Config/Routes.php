<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'signedout']);
$routes->get('auth/register', 'Auth::register',['filter' => 'signedout']);
$routes->get('auth', 'Auth::index');
$routes->get('dashboard', 'Home::dashboard',['filter' => 'signedin']);
