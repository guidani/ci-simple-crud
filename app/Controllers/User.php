<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class User extends BaseController
{

    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
    }


    public function index()
    {
        // retorna a view(pagina) de usuarios 'users'
        // passando os parametros: 'users' que é um array de dados para a view
        return view('templates/header')
            .view('users', [
            // 'users' => $this->userModel->findAll(),
            'users' => $this->userModel->paginate(10),
            'pager' => $this->userModel->pager
        ]).view('templates/footer');
    }

    public function delete($id)
    {
        if($this->userModel->delete($id)){
            echo view('templates/header').view('messages', [
                'message' => 'Usuário Excluído com sucesso.'
            ]).view('templates/footer');
        } else {
            echo 'Error';
        }
    }

    public function create()
    {
        return view('templates/header').view('form').view('templates/footer');
    }

    public function store()
    {
        if($this->userModel->save($this->request->getPost())){
            return view('templates/header').view('messages', [
                'message' => 'Usuário salvo com sucesso!'
            ]).view('templates/footer');
        }
    }

    public function edit($id)
    {
        return view('templates/header').view('form', [
            'user' => $this->userModel->find($id)
        ]).view('templates/footer');
    }
}
