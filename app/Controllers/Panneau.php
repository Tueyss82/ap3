<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Message extends BaseController
{
    private $communeModel;
    private $panneauxModel;

    public function __construct()
    {
        $this->communeModel = model('');
        $this->panneauxModel = model('');
    }

    public function index(): string
    {
        $panneaux = $this->panneauxModel->findJoinAll();

        return view('gestion-panneaux', [
            'panneau' => $panneaux
        ]);
    }

    public function ajout_panneaux(): string
    {
        $departements = $this->panneauxModel->findAll();
        return view('nouvel_etudiant',[
            'listeDepartement' => $departements
        ]);
    }

    public function create()
    {
        $etudiant = $this->request->getPost();
        $this->panneauxModel->save($etudiant);
        return redirect('index');
    }

    public function modif($etudiantId): string
    {
        $departements = $this->panneauxModel->findAll();
        $etudiantId = $this->communeModel->find($etudiantId);

        return view('modifier_etudiant', [
            'etudiant' => $etudiantId,
            'listeDepartement' => $departements
        ]);
    }
    public function update()
    {
        $etudiant = $this->request->getPost();
        $this->panneauxModel->save($etudiant);

        return redirect('index');
    }

    public function delete($etudiantId)
    {
        $this->panneauxModel->delete($etudiantId);
        return redirect('index');
    }
}

