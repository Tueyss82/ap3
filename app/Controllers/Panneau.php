<?php

namespace App\Controllers;

class Panneau extends BaseController
{
    
    private $panneauxModel;

    public function __construct()
    {
        $this->panneauxModel = model('PanneauModel');
    }

    public function index(): string
    {
        $panneaux = $this->panneauxModel->findJoinAll();

        return view('panneaux/gestion_panneaux', [
            'listePanneaux' => $panneaux
        ]);
    }

    public function ajout(): string
    {
        $panneau = $this->panneauxModel->findAll();
        return view('panneaux/ajout_panneaux',[
            'panneauAjout' => $panneau
        ]);
    }

    public function create()
    {
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);
        return redirect('panneaux/ajout_panneaux');
    }

    public function modif($panneauId): string
    {
        $panneau = $this->panneauxModel->findJoinAll();

        return view('panneaux/modifier_panneaux', [
            'panneauModif' => $panneau
        ]);
    }
    public function update()
    {
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);

        return redirect('panneaux/modifier_panneaux');
    }

    public function delete()
    {
        $this->panneauxModel->delete();
        return redirect('panneaux/suppr_panneaux');
    }
}


