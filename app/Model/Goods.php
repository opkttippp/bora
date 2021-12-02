<?php

namespace App\Model;

class Goods
{
    public function getProduct()
    {
        return include_once "../src/model/list.php";
    }
}
