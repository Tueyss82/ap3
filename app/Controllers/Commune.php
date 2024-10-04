<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Commune extends BaseController
{

    private $communeModel;

    public function __construct()
    {
        $this->communeModel = model('Commune');
    }

     //----------------------------------------------------------------------------------------------------------------------------------------//

     public function index(): string //get
     {
         $communes = $this->communeModel->findJoinAll();
 
         return view('gestion', [
             'listeEtudiant' => $etudiants
         ]);
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function ajout(): string //get
     {
         $departement = $this->departementModel->findAll();
         return view('nouvel_etudiant',[
             'listeDepartement'=>$departement
         ]);
     }
     public function create() //post
     {
         $etudiant = $this->request->getPost();
         $this->etudiantModel->insert($etudiant);
 
         return redirect('index');
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function modif($etudiantId): string //get
     {
         $etudiants = $this->etudiantModel->find($etudiantId);
 
         return view('modifier_etudiant', [
             'etudiant' => $etudiants
         ]);
     }
     public function update() //post
     {
         $etudiant = $this->request->getPost();
         $this->etudiantModel->save($etudiant);
 
         return redirect('index');
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function delete($etudiantId) //get
     {
         $this->etudiantModel->delete($etudiantId);
         return redirect('index');
     }
}
