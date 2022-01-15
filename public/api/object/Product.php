<?php

namespace api\object;

include_once '../config/Db.php';

use api\config\Db;

class Product
{
    public static function list($id)
    {
        $db = new Db();
        $params['id'] = $id;

        return $db->query(
            'SELECT * FROM product LEFT JOIN image ON product.id=image.product_id WHERE id = :id',
            $params
        );
    }

    public static function searchName($name)
    {
        $db = new Db();
        return $db->querySearch(
            "SELECT name FROM product WHERE name LIKE '%".$name." %'"
        );
    }
}
