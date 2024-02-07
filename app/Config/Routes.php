<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'StudentController::index');
$routes->get('students/create', 'StudentController::create');
$routes->post('students/store', 'StudentController::store');
$routes->get('student/edit/(:num)', 'StudentController::edit/$1');
$routes->put('student/update/(:num)', 'StudentController::update/$1');
$routes->get('student/confirm-delete/(:num)', 'StudentController::delete/$1');

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