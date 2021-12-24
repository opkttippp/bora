<?php

namespace App\Model;

use Framework\lib\Db;

class Cart
{
    public function getProductId($id)
    {
        $db = new Db();
        $params['id'] = $id;

        $res = $db->query(
            'SELECT * FROM product LEFT JOIN image ON product.id=image.product_id WHERE id = :id',
            $params
        );
        $this->sessCart($res);
    }

    public function sessCart($query)
    {
        foreach ($query as $key => $val) {
            echo $_SESSION[$key] = $val;
        }
    }
}
