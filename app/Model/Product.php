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
}
