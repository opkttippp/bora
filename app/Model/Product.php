<?php

namespace App\Model;

class Product
{
    public function getProductId($get)
    {
        include_once "../src/model/list.php";
        if (isset($list)) {
            foreach ($list as $value) {
                if ($value['id'] == $get) {
                    return $value;
                }
            }
        }
        return 'Error';
    }
}
