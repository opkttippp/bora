<?php

namespace App\Controller;

use Framework\Core\Controller;

class UserController extends Controller
{
    public function login()
    {
        if (!empty($_POST['login']) && !empty($_POST['pass'])) {
            $this->model->log($_POST['login'], $_POST['pass']);
            header("Location:/user/index");
        }
        $this->view->render('login');
    }

    public function index()
    {
        $this->view->render('index');
    }

    public function logout()
    {
        $this->del();
        header("Location:/user/login");
    }

    public function del()
    {
        session_unset();
        unset($_SESSION);
        session_destroy();
    }
}
