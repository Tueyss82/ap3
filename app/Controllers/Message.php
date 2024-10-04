<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Message extends BaseController
{
    public function index()
    {
        $model = new Message();
        $data['messages'] = $model->findAll();
        echo view('gestion-message', $data);
    }
}
 