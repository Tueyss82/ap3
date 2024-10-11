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
        return view('panneaux/ajout_panneaux');
    }

    public function create()
    {
        $panneauAjout = $this->request->getPost();
      
        $this->panneauxModel->save($panneauAjout);
        return redirect('panneaux');
    }

    public function modif($idPanneau): string
    {
        $panneauId = $this->panneauxModel->find($idPanneau);

        return view('panneaux/modifier_panneaux', [
            'panneau' => $panneauId
        ]);
    }
    public function update()
    {
        $panneau = $this->request->getPost();
        // var_dump($panneau);
        // die();
        $this->panneauxModel->save($panneau);

        return redirect('panneaux');
    }

    public function delete()
    {
        $this->panneauxModel->delete();
        return redirect('panneaux/suppr_panneaux');
    }
}
