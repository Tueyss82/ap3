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

    public function liste(): string
    {
        $panneaux = $this->panneauxModel->findJoinAll();

        return view('panneaux', [
            'listePanneaux' => $panneaux
        ]);
    }

    public function ajout(): string
    {
<<<<<<< HEAD
        $panneau = $this->panneauxModel->findAll();
        return view('ajoutPanneau',[
            'panneauAjout' => $panneau
=======
        $departements = $this->panneauxModel->findAll();
        return view('nouvel_etudiant',[
            'listeDepartement' => $departements
>>>>>>> 8529b149a7d555f8c5d0e75daa928cadd8b74f2a
        ]);
    }

    public function create()
    {
<<<<<<< HEAD
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);
        return redirect('panneaux');
=======
        $etudiant = $this->request->getPost();
        $this->panneauxModel->save($etudiant);
        return redirect('index');
>>>>>>> 8529b149a7d555f8c5d0e75daa928cadd8b74f2a
    }

    public function modif($panneauId): string
    {
<<<<<<< HEAD
        $panneau = $this->panneauxModel->find($panneauId);
=======
        $departements = $this->panneauxModel->findAll();
        $etudiantId = $this->communeModel->find($etudiantId);
>>>>>>> 8529b149a7d555f8c5d0e75daa928cadd8b74f2a

        return view('modifPanneau', [
            'panneauModif' => $panneau
        ]);
    }
    public function update()
    {
<<<<<<< HEAD
        $panneau = $this->request->getPost();
        $this->panneauxModel->save($panneau);
=======
        $etudiant = $this->request->getPost();
        $this->panneauxModel->save($etudiant);
>>>>>>> 8529b149a7d555f8c5d0e75daa928cadd8b74f2a

        return redirect('panneaux');
    }

    public function delete($panneauId)
    {
<<<<<<< HEAD
        $this->panneauxModel->delete($panneauId);
        return redirect('panneaux');
    }
}


=======
        $this->panneauxModel->delete($etudiantId);
        return redirect('index');
    }
}

>>>>>>> 8529b149a7d555f8c5d0e75daa928cadd8b74f2a
