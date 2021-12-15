<?php

namespace App\Model;

class Cart
{

    public function getProduct()
    {
        return include_once "../src/model/list.php";
    }
}
