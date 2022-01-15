<?php

namespace App\Controller;

use Framework\Core\Controller;

class ProductController extends Controller
{
    public function show()
    {
        if (!empty($_POST['search'])) {
            $this->search();
        }
        $this->view->render('Product');
    }

    public function search()
    {
        $id = $this->model->getSearchId($_POST['search'])['id'];
        header("Location:/product/show/$id");
    }
}
