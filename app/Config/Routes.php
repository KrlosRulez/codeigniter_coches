<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Pages;
use App\Controllers\Coches;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('coches', [Coches::class, 'index']);

$routes->get('coches/nuevo', [Coches::class, 'nuevo']);
$routes->post('coches/crear', [Coches::class, 'crear']);

$routes->get('coches/borrar/(:segment)', [Coches::class, 'delete']);

$routes->get('coches/(:segment)', [Coches::class, 'show']); // Se llama a show (Coches.php) con el parámetro (:segment) que contendrá la id del coche buscado

$routes->get('pages', [Pages::class, 'index']); // Mensaje de Bienvenida

//$routes->get('contacto', [Pages::class, 'view']);    
// El valor "contacto" *NO* se pasará como parámetro a la función view por lo que se usará el valor por defecto "home" en la función view

$routes->get('(:segment)', [Pages::class, 'view']); // El valor de (:segment) se pasará como parámetro ($page) a la función view

//$routes->setAutoRoute(false);