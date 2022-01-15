<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class Product
{
    public function getProductId($id)
    {
        $db = new Db();
        $params['id'] = $id;

        return $db->query(
            'SELECT * FROM product LEFT JOIN image ON product.id=image.product_id WHERE id = :id',
            $params
        );
    }
    public function getSearchId($name)
    {
        $db = new Db();
        $params['name'] = $name;

        return $db->query(
            'SELECT id FROM product WHERE name = :name',
            $params
        );
    }
}
