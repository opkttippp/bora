<?php

namespace App\Controller;

use Framework\Core\Controller;

class GoodsController extends Controller
{
    public function show()
    {
        if(!empty($this->get)){
            $data = $this->model->getProductFilter($this->get);
            $this->view->render('show', $data);
        }
        $data = $this->model->getProduct();
        $this->view->render('show', $data);
    }
}