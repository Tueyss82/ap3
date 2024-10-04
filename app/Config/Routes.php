<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index', ['as' => 'index']);
$routes->post('/', 'Home::index', ['as' => 'index']);


$routes->get('contact', 'Home::contact', ['as' => 'contact']);

$routes->get('connexion', 'Home::connexion', ['as' => 'connexion']);

$routes->get('commune/gestion_clients', 'Commune::clients', ['as' => 'clients']);

//----------------------------------------------- Commune
$routes->get('commune/ajout_commune', 'Commune::ajout', ['as' => 'ajoutCommune']);
$routes->post('commune/ajout_commune', 'Commune::create', ['as' => 'createCommune']);

$routes->get('commune/modifier_commune(:num)', 'Commune::modif/$1', ['as' => 'modifCommune']);
$routes->post('commune/modifier_commune', 'Commune::update', ['as' => 'updateCommune']);

$routes->post('commune/suppr_commune', 'Commune::delete', ['as' => 'supprCommune']);
//-----------------------------------------------

$routes->get('panneaux/gestion_panneaux', 'Home::panneaux', ['as' => 'panneaux']);

//----------------------------------------------- Panneau
$routes->get('panneaux/ajout_panneaux', 'Panneau::ajout', ['as' => 'ajoutPanneau']);
$routes->post('panneaux/ajout_panneaux', 'Panneau::create', ['as' => 'createPanneau']);

$routes->get('panneaux/modifier_panneaux(:num)', 'Panneau::modif/$1', ['as' => 'modifPanneau']);
$routes->post('panneaux/modifier_panneaux', 'Panneau::update', ['as' => 'updatePanneau']);

$routes->post('panneaux/suppr_panneaux', 'Panneau::delete', ['as' => 'supprPanneau']);
//-----------------------------------------------

$routes->get('message/gestion_message', 'Home::message', ['as' => 'message']);

//----------------------------------------------- Message
$routes->get('message/ajout_message', 'Message::ajout', ['as' => 'ajoutMessage']);
$routes->post('message/ajout_message', 'Message::create', ['as' => 'createMessage']);

$routes->get('message/modifier_message(:num)', 'Message::modif/$1', ['as' => 'modifMessage']);
$routes->post('message/modifier_message', 'Message::update', ['as' => 'updateMessage']);

$routes->post('message/suppr_message', 'Message::delete', ['as' => 'supprMessage']);
//-----------------------------------------------

$routes->get('utilisateurs/gestion_utilisateur', 'Home::utilisateur', ['as' => 'utilisateur']);

//----------------------------------------------- Utilisateur
$routes->get('utilisateurs/ajout_utilisateur', 'Utilisateur::ajout', ['as' => 'ajoutUtilisateur']);
$routes->post('utilisateurs/ajout_utilisateur', 'Utilisateur::create', ['as' => 'createUtilisateur']);

$routes->get('utilisateurs/modifier_utilisateur(:num)', 'Utilisateur::modif/$1', ['as' => 'modifUtilisateur']);
$routes->post('utilisateurs/modifier_utilisateur', 'Utilisateur::update', ['as' => 'updateUtilisateur']);

$routes->post('utilisateurs/suppr_utilisateur', 'Utilisateur::delete', ['as' => 'supprUtilisateur']);

