<?php

namespace App\Controller;

use App\Core\Controller;

class CartController extends Controller
{
    public function show()
    {
        $data = $this->model->getProduct();
        $this->view->render('show', $data);
    }
}