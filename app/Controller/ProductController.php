<?php

namespace App\Controller;

use Framework\Core\Controller;

class ProductController extends Controller
{
    public function show()
    {
        $data = $this->model->getProductId($this->get);
        $this->view->render('Product', $data);
    }
}
