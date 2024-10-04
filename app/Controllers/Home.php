<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function connexion(): string
    {
        return view('connexion');
    }

    public function utilisateur(): string
    {
        return view('gestion_utilisateur');
    }
}
