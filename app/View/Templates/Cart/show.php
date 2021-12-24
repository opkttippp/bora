<div class="container-home">
  <div class="container-basket">
      <?php
      if (isset($_SESSION)) {
          extract($_SESSION); ?>
        <h3>Ваша корзина:</h3>
        <hr>
        <div class="order">
          <img src="<?= $image_1 ?>" width="70" height="50" alt="ноутбук">
          <div class="name"><?= $name ?> </div>
          <div class="number"> 1 шт.</div>
          <div class="price"> Цена: <?= $price ?></div>
        </div>
        <hr>
          <?php
      }
      ?>
  </div>
</div>
