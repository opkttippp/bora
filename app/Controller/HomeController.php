<?php

namespace App\Controller;

use Framework\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        $this->view->render('index');
    }
}