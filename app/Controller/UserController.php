<?php

namespace App\Controller;

use Framework\Core\Controller;

class UserController extends Controller
{
    public function login()
    {
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            $this->model->log($_POST['login'], $_POST['pass']);
        }
        $this->view->render('login');
    }

    public function reg()
    {
//        $phone = $_POST['phone'] ?? 'не указан';

        if (!empty($_POST['login']) && !empty($_POST['surname']) && !empty($_POST['pass']) && !empty($_POST['email'])) {
            $this->model->reg();
        }
        $this->view->render('reg');
    }

    public function index()
    {
        $this->view->render('index');
    }

    public function logout()
    {
        Sess::logout();
        header("Location:/user/login");
    }
}
