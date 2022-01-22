<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class Goods
{
    public function getProduct()
    {
        $db = new Db();
        return $db->queryAll('SELECT * FROM product LEFT JOIN image ON product.id=image.product_id');
    }

    public function getProductFilter($get)
    {
        $db = new Db();
        $insert = match ($get) {
            'cheap' => 'ORDER BY `price` ASC',
            'expen' => 'ORDER BY `price` DESC',
            'up' => 'ORDER BY `name` DESC',
            'down' => 'ORDER BY `name` ASC',
            'notebook' => 'WHERE category_idcategory = 0',
            'tablet' => 'WHERE category_idcategory = 1',
        };
        return $db->queryAll("SELECT * FROM product LEFT JOIN image ON product.id=image.product_id $insert");
    }
}
