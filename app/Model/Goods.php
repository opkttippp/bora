<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class Goods
{

    public function getProduct()
    {
        $db = new Db();
        return $db->query('SELECT * FROM product LEFT JOIN image ON product.id=image.product_id');
    }
}
