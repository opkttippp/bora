<?php
    if (!isset($_GET['id'])){
?>
  <div class="container-home">
    <div class="container-basket"><img src="/images/basket.png" alt="корзина">
    </div>
  </div>
<?php
}
    else
?>
<div class="container-home">
<?php
    include_once 'public/view/goods_list/list.php';
    $id = $_GET['id'];
    foreach ($list as $val) {
    if ($val['id'] == $id) {
?>
  <h3>Ваша корзина:</h3>
  <hr>
    <img style="margin-right: 50px;" src="/images/<?= $val['id'] ?>01.jpg" width="70" height="50" alt="ноутбук">
  <h5 style="display:inline-block;"><?= $val['name']?> - 1 шт.</h5>
   <hr>
  <h5 style="display:inline-block;">Итого: <?= $val['price']?></h5>
  <hr style="clear: both">
<?php }
$n++;
}




