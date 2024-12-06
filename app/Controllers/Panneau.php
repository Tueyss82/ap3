<?php

namespace App\Controllers;

class Panneau extends BaseController
{

    private $panneauxModel;
    private $communeModel;

    public function __construct()
    {
        $this->panneauxModel = model('PanneauModel');
        $this->communeModel = model('CommuneModel');

    }

    public function index(): string
    {

        $panneaux = $this->panneauxModel->findJoinAll();

        // var_dump($panneaux);
        // die();
        return view('panneaux/gestion_panneaux', [
            'listePanneaux' => $panneaux
        ]);
    }


    public function ajout(): string
    {
        
        $communes = $this->communeModel->findCommune();
        return view('panneaux/ajout_panneaux', ['commune'=> $communes]);
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
        $communes = $this->communeModel->findCommune();
        return view('panneaux/modifier_panneaux', [
            'panneau' => $panneauId,'commune'=> $communes
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
        $idPanneau = $this->request->getPost('IDPANNEAU');
        $this->panneauxModel->delete($idPanneau);
        return redirect('panneaux');
    }
}
