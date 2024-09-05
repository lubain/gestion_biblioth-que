<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('home', 'Home::home');
$routes->get('search', 'Home::search');
$routes->get('sell', 'Home::sell');
$routes->get('search/detailSearch/(:num)', 'Home::detailSearch/$1');
$routes->get('sell/detailSell', 'Home::detailSell');

// ------------------------------

$routes->get('login', 'Login::login');
$routes->get('logout', 'Login::logout');
$routes->get('admin', 'Home::admin');
$routes->get('userList', 'Home::userList');
$routes->get('livreList', 'Home::livreList');
$routes->get('upload', 'Home::upload');
$routes->get('createUser', 'Home::formUser');
$routes->get('createLivre', 'Home::formLivre');
$routes->get('update/user/(:num)', 'Home::findUser/$1');
$routes->get('update/livre/(:num)', 'Home::findLivre/$1');
$routes->get('delete/user/(:num)', 'Home::deleteUser/$1');
$routes->get('delete/livre/(:num)', 'Home::deleteLivre/$1');
$routes->get('createAdmin', 'Login::createAdmin');

$routes->post('search', 'Home::searchLivre');
$routes->post('createUser', 'Home::createUser');
$routes->post('createAdmin', 'Login::insertAdmin');
$routes->post('createLivre', 'Home::createLivre');
$routes->post('upload', 'Home::uploadFile');
$routes->post('update/user/(:num)', 'Home::userUpdate/$1');
$routes->post('search/detailSearch/(:num)', 'Home::pret/$1');
$routes->post('update/livre/(:num)', 'Home::livreUpdate/$1');
$routes->post('login', 'Login::check');
$routes->post('livreList', 'Home::searchLivreAdmin');
$routes->post('userList', 'Home::searchUserAdmin');