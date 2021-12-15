<?php

namespace App\Controller;

use Framework\Core\Controller;

class CartController extends Controller
{
    public function show()
    {
        $data = $this->model->getProduct();
        $this->view->render('show', $data);
    }
}