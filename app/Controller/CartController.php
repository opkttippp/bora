<?php

namespace App\Controller;

use Framework\Core\Controller;

class CartController extends Controller
{
    public function show()
    {
        if (!empty($this->get)) {
            $data = $this->model->addTocart($this->get);
            $this->view->render('show', $data);
        }
        $this->view->render('show');
    }

    public function inc()
    {
        $this->model->incrementIdCart($this->get);
    }

    public function decr()
    {
        $this->model->decrementIdCart($this->get);
    }

    public function delete()
    {
        $this->model->removeFromCart($this->get);
    }
}
