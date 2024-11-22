<?php

namespace App\Controllers;

use App\Models\MessageModel;
use App\Models\CommuneModel;

class Message extends BaseController
{
    private $messageModel;
    private $communeModel;

    public function __construct()
    {
        $this->messageModel = model('MessageModel');
        $this->communeModel = model('CommuneModel');
    }

    // Afficher tous les messages
    public function index(): string
    {
        return view('messages/gestion_message', [
            'messages' => $this->messageModel->findAll()
        ]);
    }

    // Afficher le formulaire pour ajouter un message
    public function ajout(): string
    {
        return view('messages/ajout_message', [
            'listeCommune' => $this->communeModel->findAll()
        ]);
    }

    // Créer un nouveau message
    public function create()
    {
        $this->messageModel->save($this->request->getPost());
        return redirect('message');
    }

    // Afficher le formulaire pour modifier un message
    public function modif($id): string
    {
        $message = $this->messageModel->find($id);
        return view('messages/modifier_message', [
            'message' => $message,
            'listeCommune' => $this->communeModel->findAll()
        ]);
    }

    // Mettre à jour un message
    public function update()
    {
        $messageData = $this->request->getPost();
        $this->messageModel->save($messageData);  // Sauvegarde directement les données envoyées
        return redirect('message');
    }

    // Supprimer un message
    public function delete()
    {
        $this->messageModel->delete($this->request->getPost('IDMESSAGE'));  // Suppression du message avec l'ID via POST
        return redirect('message');
    }

    // Afficher les détails d'un message
    public function view($id): string
    {
        $message = $this->messageModel->find($id);
        return view('messages/view_message', [
            'message' => $message
        ]);
    }
}
