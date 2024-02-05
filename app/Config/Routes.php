<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('students', 'StudentController::index');

// $routes->get('products', 'ProductController::index');
// $routes->get('products/(:any)', 'ProductController::find/$1');

// $routes->group('users', function ($routes){
    
//     $routes->get('profile', function(){
//         return "I am user profile";
//     });
//     $routes->get('orders', function(){
//         return "I am user orders";
//     });
// });