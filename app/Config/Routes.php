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

$routes->post('suppr-commune', 'Commune::delete', ['as' => 'supprCommune']);
//-----------------------------------------------

$routes->get('gestion-panneaux', 'Home::panneaux');

//----------------------------------------------- Panneau
$routes->get('ajout-panneaux', 'Panneau::ajout', ['as' => 'ajoutPanneau']);
$routes->post('ajout-panneaux', 'Panneau::create', ['as' => 'createPanneau']);

$routes->get('modifier-panneaux(:num)', 'Panneau::modif/$1', ['as' => 'modifPanneau']);
$routes->post('modifier-panneaux', 'Panneau::update', ['as' => 'updatePanneau']);

$routes->post('suppr-panneaux', 'Panneau::delete', ['as' => 'supprPanneau']);
//-----------------------------------------------

$routes->get('gestion-message', 'Home::message');

//----------------------------------------------- Message
$routes->get('ajout-message', 'Message::ajout', ['as' => 'ajoutMessage']);
$routes->post('ajout-message', 'Message::create', ['as' => 'createMessage']);

$routes->get('modifier-message(:num)', 'Message::modif/$1', ['as' => 'modifMessage']);
$routes->post('modifier-message', 'Message::update', ['as' => 'updateMessage']);

$routes->post('suppr-message', 'Message::delete', ['as' => 'supprMessage']);
//-----------------------------------------------

$routes->get('gestion-utilisateur', 'Home::utilisateur');

//----------------------------------------------- Utilisateur
$routes->get('ajout-utilisateur', 'Utilisateur::ajout', ['as' => 'ajoutUtilisateur']);
$routes->post('ajout-utilisateur', 'Utilisateur::create', ['as' => 'createUtilisateur']);

$routes->get('modifier-utilisateur(:num)', 'Utilisateur::modif/$1', ['as' => 'modifUtilisateur']);
$routes->post('modifier-utilisateur', 'Utilisateur::update', ['as' => 'updateUtilisateur']);

$routes->post('suppr-utilisateur', 'Utilisateur::delete', ['as' => 'supprUtilisateur']);

