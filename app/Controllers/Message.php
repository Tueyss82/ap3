<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Message extends BaseController
{
    private $messageModel;

    public function __construct()
    {
        $this->messageModel = new MessageModel();
    }

    public function index(): string
    {
        $messages = $this->messageModel->findAll();

        return view('gestion_message', [
            'message' => $messages
        ]);
    }

    public function ajout(): string
    {
        return view('ajout_message');
    }

    public function create()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();
            $this->messageModel->save($messageData);
            return redirect()->to('message');
        }

        return view('ajout_message');
    }

    public function modif($id): string
    {
        $message = $this->messageModel->find($id);

        return view('modifier_message', [
            'message' => $message
        ]);
    }

    public function update()
    {
        if ($this->request->getMethod() === 'post') {
            $messageData = $this->request->getPost();
            $this->messageModel->save($messageData);
            return redirect()->to('message');
        }

        return view('modifier_message');
    }

    public function delete($id)
    {
        $this->messageModel->delete($id);
        return redirect()->to('message');
    }
}
