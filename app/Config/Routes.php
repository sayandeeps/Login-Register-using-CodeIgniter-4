<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index',['filter' => 'signedout']);
$routes->match(['get','post'],'auth/register', 'Auth::register',['filter' => 'signedout']);
$routes->match(['get','post'],'auth/login', 'Auth::login',['filter' => 'signedout']);
// $routes->get('auth/register', 'Auth::register',['filter' => 'signedout']);
$routes->get('auth/dashboard', 'Auth::dashboard',['filter' => 'signedin']);
$routes->get('auth/logout', 'Auth::logout',['filter' => 'signedin']);
$routes->post('auth/edit', 'Auth::edit',['filter' => 'signedin']);
$routes->get('auth/deleteuser', 'Auth::deleteuser',['filter' => 'signedin']);
$routes->post('auth/uploadpic', 'Auth::uploadpic',['filter' => 'signedin']);


