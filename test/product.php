<?php

class product
{
    public $id;
    public $title;

    public function getById(array $productsList, $id)
    {
        foreach ($productsList as $item) {
            if ($item['id'] == $id) {
                $this->id = $item['id'];
                $this->title = $item['title'];
                break;
            }
        }
        return $this;
    }
}