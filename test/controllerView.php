<?php

class controllerView

{
    public $id;
    public $get;

    function viewProductByid($id){
        $get = new controllerProduct($id);
        return $get -> getProductByid($id);
    }
    function viewProducts(){
        $get = new controllerProduct();
        return $get -> getProducts();
    }
}