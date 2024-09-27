<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('', 'Home::index');

$routes->get('contact', 'Home::contact');

$routes->get('page-connexion', 'Home::connexion');

$routes->get('gestion-clients', 'Home::clients');

//----------------------------------------------- Commune
$routes->get('ajout-commune', 'Commune::ajout', ['as' => 'ajoutCommune']);
$routes->post('ajout-commune', 'Commune::create', ['as' => 'createCommune']);

$routes->get('modifier-commune(:num)', 'Commune::modif/$1', ['as' => 'modifCommune']);
$routes->post('modifier-commune', 'Commune::update', ['as' => 'updateCommune']);

$routes->get('suppr-commune(:num)', 'Commune::delete/$1', ['as' => 'supprCommune']);
//-----------------------------------------------

$routes->get('gestion-panneaux', 'Home::panneaux');

//----------------------------------------------- Panneau
$routes->get('ajout-panneaux', 'Panneau::ajout', ['as' => 'ajoutPanneau']);
$routes->post('ajout-panneaux', 'Panneau::create', ['as' => 'createPanneau']);

$routes->get('modifier-panneaux(:num)', 'Panneau::modif/$1', ['as' => 'modifPanneau']);
$routes->post('modifier-panneaux', 'Panneau::update', ['as' => 'updatePanneau']);

$routes->get('suppr-panneaux(:num)', 'Panneau::delete/$1', ['as' => 'supprPanneau']);
//-----------------------------------------------

$routes->get('gestion-message', 'Home::message');

//----------------------------------------------- Message
$routes->get('ajout-message', 'Message::ajout', ['as' => 'ajoutMessage']);
$routes->post('ajout-message', 'Message::create', ['as' => 'createMessage']);

$routes->get('modifier-message(:num)', 'Message::modif/$1', ['as' => 'modifMessage']);
$routes->post('modifier-message', 'Message::update', ['as' => 'updateMessage']);

$routes->get('suppr-message(:num)', 'Message::delete/$1', ['as' => 'supprMessage']);

