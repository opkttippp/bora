<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class Goods
{
    public function getProduct()
    {
        $db = new Db();

        $res = $db->db->query('SELECT * FROM product LEFT JOIN image ON product.id=image.product_id');
        return $res->fetchAll(PDO::FETCH_ASSOC);
    }
}
