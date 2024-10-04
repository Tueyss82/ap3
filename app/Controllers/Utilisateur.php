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
        $this->userModel = new UtilisateurModel();
        $this->communeModel = new CommuneModel();
    }

    public function ajout(): string
    {
        $commune = $this->communeModel->findAll();
        return view('ajout_utilisateur', [
            'listeCommune' => $commune
        ]);
    }

    public function create()
    {
        $userData = $this->request->getPost();
        $this->userModel->save($userData);
        return redirect('gestion_utilisateur');
    }

    public function modif($userId): string
    {
        $user = $this->userModel->find($userId);

        return view('modif_utilisateur', [
            'utilisateur' => $user,
        ]);
    }

    public function update()
    {
        $userData = $this->request->getPost();
        $this->userModel->save($userData);
        return redirect('gestion_utilisateur');   
    }

    public function delete($userId)
    {
        $this->userModel->delete($userId);
        return redirect('gestion_utilisateur');
    }

}
