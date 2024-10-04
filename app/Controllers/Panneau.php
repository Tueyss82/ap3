<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Message extends BaseController
{
    private $communeModel;
    private $panneauxModel;

    public function __construct()
    {
        $this->communeModel = model('Commune');
        $this->panneauxModel = model('Panneau');
    }

    public function index(): string
    {
        $panneaux = $this->panneauxModel->findJoinAll();

        return view('panneaux', [
            'listePanneaux' => $panneaux
        ]);
    }

    public function ajout(): string
    {
        $panneau = $this->panneauxModel->findAll();
        return view('ajoutPanneau',[
            'panneauAjout' => $panneau
        ]);
    }

    public function create()
    {
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);
        return redirect('panneaux');
    }

    public function modif($panneauId): string
    {
        $panneau = $this->panneauxModel->find($panneauId);

        return view('modifPanneau', [
            'panneauModif' => $panneau
        ]);
    }
    public function update()
    {
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);

        return redirect('panneaux');
    }

    public function delete($panneauId)
    {
        $this->panneauxModel->delete($panneauId);
        return redirect('panneaux');
    }
}


