<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
//$routes->setDefaultController('Home');
$routes->setDefaultController('Main');


$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

//$routes->get('/', 'Home::index');

$routes->get('/', 'Main::index');


$routes->match(['post', 'get'], 'test', 'Main::test', ['as' => 'main_test']);

$routes->match(['post', 'get'], 'test2', 'Main::test2', ['as' => 'main_test2']);

// Загруска файла

$routes->match(['get', 'post'], 'file-upload', 'Main::fileUpload', ['as' => 'main.fileupload']);





$routes->get('blog/create', 'Blog::create', ['as' => 'blog_create']);

$routes->post('blog/store','Blog::store');



$routes->get('blog/edit/(:num)', 'Blog::edit/$1', ['as' => 'blog_edit']);

$routes->post('blog/update/(:num)', 'Blog::update/$1', ['as' => 'blog_update']);

// удаления записи 
$routes->get('blog/delete/(:num)', 'Blog::delete/$1', ['as' => 'blog_delete']);



$routes->get('blog/(:num)', 'Blog::view/$1');

$routes->get('blog', 'Blog::index', ['as' => 'blog_index']);



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
