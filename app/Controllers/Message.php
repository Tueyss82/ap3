<?php

namespace App\Controllers;

class Message extends BaseController
{
    private $messageModel;
    private $communeModel;

    public function __construct()
    {
        // Utilisation de la méthode model() pour charger les modèles
        $this->messageModel = model('MessageModel');
        $this->communeModel = model('CommuneModel');
    }

    // Afficher tous les messages
    public function index(): string
    {
        $messages = $this->messageModel->findAll();

        return view('messages/gestion_message', [
            'messages' => $messages
        ]);
    }

    // Afficher le formulaire pour ajouter un message
    public function ajout(): string
    {
        // Récupérer la liste des communes
        $listeCommune = $this->communeModel->findAll();
       
        return view('messages/ajout_message', [
            'listeCommune' => $listeCommune
        ]);
    }

    // Créer un nouveau message
    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();

            // Validation des champs requis
            if (!empty($messageData['IDCOMMUNE']) && !empty($messageData['ETAT']) && !empty($messageData['TEXTE'])) {
                $this->messageModel->save($messageData);
                return redirect()->to('message');
            } else {
                return redirect()->back()->with('error', 'Tous les champs sont requis.');
            }
        }

        return redirect()->to('message/ajout');
    }

    // Afficher le formulaire pour modifier un message
    public function modif($id): string
    {
        // Récupérer le message avec son ID
        $message = $this->messageModel->find($id);

        // Si le message n'est pas trouvé, générer une erreur 404
        if (!$message) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Message avec l'ID {$id} non trouvé.");
        }

        // Récupérer la liste des communes pour la modification
        $listeCommune = $this->communeModel->findAll();

        return view('messages/modifier_message', [
            'message' => $message,
            'listeCommune' => $listeCommune
        ]);
    }

    // Mettre à jour un message
    public function update()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();

            // Validation des champs requis
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
        // Supprimer le message avec l'ID donné
        $this->messageModel->delete($id);
        return redirect()->to('message');
    }

    // Afficher les détails d'un message
    public function view($id): string
    {
        // Récupérer le message
        $message = $this->messageModel->find($id);

        // Si le message n'est pas trouvé, générer une erreur 404
        if (!$message) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound("Message avec l'ID {$id} non trouvé.");
        }

        return view('messages/view_message', [
            'message' => $message
        ]);
    }
}
