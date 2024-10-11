<?php

namespace App\Controllers;

use App\Models\UtilisateurModel;
use App\Models\CommuneModel;

class Utilisateur extends BaseController
{
    private $userModel;
    private $communeModel;

    public function __construct()
    {
        $this->userModel = model('UtilisateurModel');
        $this->communeModel = model('CommuneModel');
    }

    public function index(): string
    {
        $user = $this->userModel->findJoinAll();
        return view('utilisateurs/gestion_utilisateur', [
            'listeUtilisateur' => $user
        ]);
    }

    public function ajout(): string
    {
        $commune = $this->communeModel->findAll();
        return view('utilisateurs/ajout_utilisateur', [
            'listeUtilisateur' => $commune
        ]);
    }

    public function create()
    {
        $userData = $this->request->getPost();
        // var_dump($userData);
        // die();
        $this->userModel->save($userData);
        return redirect('index');
    }

    public function modif($userId): string
    {
        $user = $this->userModel->find($userId);
        $commune = $this->communeModel->findAll();
        // var_dump($user);
        // var_dump($commune);
        // die();
        return view('utilisateurs/modifier_utilisateur', [
            'utilisateur' => $user,
            'listeCommune' => $commune
        ]);
    }

    public function update()
    {
        $userData = $this->request->getPost();
        $this->userModel->save($userData);
        // var_dump($userData);
        // die();
        return redirect('index');   
    }

    public function delete()
    {
        $userId = $this->request->getPost('IDUTILISATEUR');
        $this->userModel->delete($userId);
        return redirect('index');
    }

}
