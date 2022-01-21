<?php

namespace api\product;

use api\object\Product;

include_once '../object/Product.php';

$json = file_get_contents('php://input');
$obj = json_decode($json, true);
$prodId = $obj['val'] ?? '';
$getProduct = Product::searchName($prodId);

echo json_encode($getProduct);
