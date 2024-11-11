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
        $this->messageModel = new MessageModel();
        $this->communeModel = new CommuneModel();
    }

    // Afficher tous les messages
    public function index(): string
    {
        $messages = $this->messageModel->findAll();

        return view('gestion_message', [
            'messages' => $messages
        ]);
    }

    // Afficher le formulaire pour ajouter un message
    public function ajout(): string
    {
        $listeCommune = $this->communeModel->findAll();
        return view('ajout_message', [
            'listeCommune' => $listeCommune
        ]);
    }

    // Créer un nouveau message
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();

            // Validation
            if (!empty($messageData['IDCOMMUNE']) && !empty($messageData['ETAT']) && !empty($messageData['TEXTE'])) {
                $this->messageModel->save($messageData);
                return redirect()->to('message');
            } else {
                return redirect()->back()->with('error', 'Tous les champs sont requis.');
            }
        }

        return redirect()->to('ajout_message');
    }

    // Afficher le formulaire pour modifier un message
    public function modif($id): string
    {
        $message = $this->messageModel->find($id);

        if (!$message) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $listeCommune = $this->communeModel->findAll();

        return view('modifier_message', [
            'message' => $message,
            'listeCommune' => $listeCommune
        ]);
    }

    // Mettre à jour un message
    public function update()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();

            if (!empty($messageData['IDCOMMUNE']) && !empty($messageData['ETAT']) && !empty($messageData['TEXTE'])) {
                $this->messageModel->save($messageData);
                return redirect()->to('message');
            } else {
                return redirect()->back()->with('error', 'Tous les champs sont requis.');
            }
        }

        return redirect()->to('message');
    }

    // Supprimer un message
    public function delete($id)
    {
        $this->messageModel->delete($id);
        return redirect()->to('message');
    }

    // Afficher les détails d'un message
    public function view($id): string
    {
        $message = $this->messageModel->find($id);

        if (!$message) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('view_message', ['message' => $message]);
    }
}
