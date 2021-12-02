<?php

class all_product
{
    public function getAll(array $productsList)
    {
        $products = [];
        foreach ($productsList as $item) {
            $product = new Product();
            $product->id = $item['id'];
            $product->title = $item['title'];
            $products[] = $product;
        }
        return $products;
    }
}