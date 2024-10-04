<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UtilisateurModel;

class Utilisateur extends BaseController
{
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UtilisateurModel();
    }

    public function ajout(): string
    {
        $user = $this->userModel->findAll();
        return view('ajout_utilisateur', [
            'listeUtilisateur' => $user
        ]);
    }

    public function create()
    {
        $userData = $this->request->getPost();
        $this->userModel->save($userData);
        return redirect('index');
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
        return redirect('index');   
    }

    public function delete($userId)
    {
        $this->userModel->delete($userId);
        return redirect('index');
    }

}
