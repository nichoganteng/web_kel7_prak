<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/form', 'Form::index');
$routes->post('/submit-form', 'FormController::submitForm'); // Corrected the method to post
$routes->get('/latihanview', 'HelloWorld::index');
$routes->get('/layout', 'LayoutController::index');
$routes->get('profile', 'FormController::profile');
$routes->get('about', 'FormController::about');


$routes->get('crud', 'Crud::index');
$routes->get('crud/tambah', 'Crud::tambah');
$routes->post('crud/tambah', 'Crud::tambah');

$routes->get('crud/hapus/(:num)', 'Crud::hapus/$1');

$routes->get('crud/edit/(:num)', 'Crud::edit/$1');
$routes->post('/crud/editan', 'Crud::editan');