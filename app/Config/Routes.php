<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

// Authentication Routes
$routes->group('auth', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Auth::index');
    $routes->get('login', 'Auth::login');
    $routes->post('login', 'Auth::login');
    $routes->get('register', 'Auth::register');
    $routes->post('register', 'Auth::register');
    $routes->get('logout', 'Auth::logout');
    $routes->get('dashboard', 'Auth::dashboard');
});

// Dashboard route (redirect to auth dashboard)
$routes->get('dashboard', 'Auth::dashboard');

// Test route for CSS verification
$routes->get('test-css', function() {
    return view('test_css');
});
