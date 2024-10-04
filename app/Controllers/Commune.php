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
 
         return view('gestion-clients', [
             'listeCommunes' => $communes
         ]);
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function ajout(): string //get
     {
         $communes = $this->communeModel->findAll();
         return view('ajout_commune',[
             'listeCommune'=>$communes
         ]);
     }
     public function create() //post
     {
         $commune = $this->request->getPost();
         $this->communeModel->insert($commune);
 
         return redirect('index');
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function modif($IDCOMMUNE): string //get
     {
         $communes= $this->communeModel->find($IDCOMMUNE);
 
         return view('modifier_commune', [
             'commune' => $communes
         ]);
     }
     public function update() //post
     {
         $commune = $this->request->getPost();
         $this->communeModel->save($commune);
 
         return redirect('clients');
     }
     //----------------------------------------------------------------------------------------------------------------------------------------//
     public function delete($IDCOMMUNE) //get
     {
         $this->communeModel->delete($IDCOMMUNE);
         return redirect('clients');
     }
}
