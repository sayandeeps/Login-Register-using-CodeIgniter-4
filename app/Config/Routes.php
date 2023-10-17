<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'signedout']);
$routes->match(['get','post'],'auth/register', 'Auth::register',['filter' => 'signedout']);
// $routes->get('auth/register', 'Auth::register',['filter' => 'signedout']);
$routes->get('dashboard', 'Home::dashboard',['filter' => 'signedin']);
