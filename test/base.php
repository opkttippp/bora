<?php

class base

{
    public $id;
    public $array;
    public $title;

    function get_id($id){

        $this->array =  $this->getProducts();


        foreach ($this->array as $item) {
            if ($item['id'] == $id) {
                $this->id = $item['id'];
                $this->title = $item['title'];
                return $this->title;
            }
        } return false;
    }
    function getProducts(){
        return
            [
                0 => [
                    'id' => 1,
                    'title' => 'TV',
                ],
                1 => [
                    'id' => 2,
                    'title' => 'Car',
                ],
                2 => [
                    'id' => 3,
                    'title' => 'Fridge',
                ]
            ];
    }

}