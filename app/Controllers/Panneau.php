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
        $panneaux = $this->etudiantModel->findJoinAll();

        return view('gestion-panneaux', [
            'panneau' => $panneaux
        ]);
    }

    public function ajout-panneaux(): string
    {
        $departements = $this->departementModel->findAll();
        return view('nouvel_etudiant',[
            'listeDepartement' => $departements
        ]);
    }

    public function create()
    {
        $etudiant = $this->request->getPost();
        $this->etudiantModel->save($etudiant);
        return redirect('index');
    }

    public function modif($etudiantId): string
    {
        $departements = $this->departementModel->findAll();
        $etudiantId = $this->etudiantModel->find($etudiantId);

        return view('modifier_etudiant', [
            'etudiant' => $etudiantId,
            'listeDepartement' => $departements
        ]);
    }
    public function update()
    {
        $etudiant = $this->request->getPost();
        $this->etudiantModel->save($etudiant);

        return redirect('index');
    }

    public function delete($etudiantId)
    {
        $this->etudiantModel->delete($etudiantId);
        return redirect('index');
    }
}

}
