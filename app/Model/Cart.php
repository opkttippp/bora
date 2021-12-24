<?php

namespace App\Model;

use Framework\lib\Db;

class Cart
{
    public function getProductId($product_id)
    {
        $db = new Db();
        $params['id'] = $product_id;

        $result = $db->query(
            'SELECT * FROM product LEFT JOIN image ON product.id=image.product_id WHERE id = :id',
            $params
        );
        return $result;
    }

//    public function cartProductId($id)
//    {
//        $db = new Db();
//        $params['id'] = $id;
//
//        $db->query(
//            'INSERT INTO userCart (name, price, count ) (value1, value2, value3, ...);',
//            $params
//        );
//    }

    public function addTocart($product_id, $coun = 1)
    {
        if (!empty($_SESSION['products'][$product_id])) {
            $_SESSION['products'][$product_id]['count']++;
        } else {
            $res = $this->getProductId($product_id);
            extract($res);

            $_SESSION['products'][$product_id]['cost'] = $price;
            $_SESSION['products'][$product_id]['name'] = $name;
            $_SESSION['products'][$product_id]['image'] = $image_1;
            $_SESSION['products'][$product_id]['count'] = $coun;
        }
        $this->updateCart();
    }


    public function updateCart()
    {
        $_SESSION['cartCost'] = 0;
        $_SESSION['cartCount'] = 0;
        foreach ($_SESSION['products'] as $key => $value) {
            $_SESSION['cartCost'] += $_SESSION['products'][$key]['cost'] * $_SESSION['products'][$key]['count'];
            $_SESSION['cartCount'] += $_SESSION['products'][$key]['count'];
        }
    }

    public function incrementIdCart($product_id)
    {
        $_SESSION['products'][$product_id]['count']++;
        $this->updateCart();
        header("Location:/cart/show");
    }

    public function decrementIdCart($product_id)
    {
        if ($_SESSION['products'][$product_id]['count'] >= 2) {
            $_SESSION['products'][$product_id]['count']--;
        } else {
            $this->removeFromCart($product_id);
        }
        $this->updateCart();
        header("Location:/cart/show");
    }

    public function removeFromCart($product_id)
    {
        unset($_SESSION['products'][$product_id]);
        $this->updateCart();
        header("Location:/cart/show");
    }
}
