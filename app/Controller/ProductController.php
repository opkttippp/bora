<?php

namespace App\Controller;

use App\Core\Controller;

class ProductController extends Controller
{
    public function show()
    {
        $data = $this->model->getProductId($this->get);
        $this->view->render('Product', $data);
    }
}
