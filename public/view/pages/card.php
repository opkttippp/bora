<?php
if (!isset($_GET['id'])) {
    echo '
<div class="container-home">
  <div class="container-basket"><img src="/public/images/basket.png" alt="корзина">
  </div>
</div>
    ';
} else
    echo '<div class="container-home">';
include_once 'src/model/list.php';
$id = $_GET['id'];
foreach ($list as $val) {
    if ($val['id'] == $id) {
        ?>
<div class="order">
  <h3>Ваша корзина:</h3>
  <hr>
  <img style="margin-right: 50px;" src="<?= $val['image_1'] ?>" width="70" height="50" alt="ноутбук">
  <h5 style="display:inline-block;"><?= $val['name'] ?> - 1 шт.</h5>
  <hr>
  <h5>Итого: <?= $val['price'] ?></h5>

</div>
    <?php }
}
echo '</div>';




