<?php

class controllerProduct
{
    public $id;
    public $get;

    function getProductByid($id)
    {
        $this->get = new base();
        return $this->get->get_id($id);
    }

    function getProducts()
    {
        $get = new base();
        return $get->getProducts();
    }

}