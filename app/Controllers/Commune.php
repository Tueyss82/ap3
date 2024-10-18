<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Commune extends BaseController
{

    private $communeModel;

    public function __construct()
    {
        $this->communeModel = model('CommuneModel');
    }

    //----------------------------------------------------------------------------------------------------------------------------------------//

    public function clients(): string //get
    {
        $communes = $this->communeModel->findAll();

        return view('communes/gestion_clients', [
            'listeCommune' => $communes
        ]);
    }
    //----------------------------------------------------------------------------------------------------------------------------------------//
    public function ajout(): string //get
    {
        $communes = $this->communeModel->findAll();
        return view('communes/ajout_commune', [
            'listeCommune' => $communes
        ]);
    }
    public function create() //post
    {
        $commune = $this->request->getPost();
        $this->communeModel->insert($commune);

        return redirect('clients');
    }
    //----------------------------------------------------------------------------------------------------------------------------------------//
    public function modif($IDCOMMUNE): string //get
    {
        $communes = $this->communeModel->find($IDCOMMUNE);

        return view('communes/modifier_commune', [
            'commune' => $communes
        ]);
    }
    public function update() //post
    {
        $commune = $this->request->getPost();
//         var_dump($commune);
// die();
        $this->communeModel->save($commune);

        return redirect('clients');
    }
    //----------------------------------------------------------------------------------------------------------------------------------------//
    public function delete() //post
    {
        $IDCOMMUNE = $this->request->getPost('IDCOMMUNE');
        $this->communeModel->delete($IDCOMMUNE);
        return redirect('clients');
    }
}
