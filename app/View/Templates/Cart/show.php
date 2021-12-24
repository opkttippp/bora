<div class="container-home">
  <div class="container-basket">
      <?php
      if (!empty($_SESSION['products'])) : ?>
        <h3>Ваша корзина:</h3>
        <hr>
          <?php
            foreach ($_SESSION['products'] as $key => $val) {
                extract($val); ?>
            <div class="order">
              <img src="<?= $image; ?>" width="70" height="50" alt="ноутбук">
              <div class="name"><?= $name ?> </div>
              <div class="number"><a href="/cart/inc/<?= $key ?>"><img src="/images/pluss.jpg" width="20" height="20"
                                                                       alt=""></a>
              </div>
              <div class="number"> <?= $count ?> шт.</div>
              <div class="number"><a href="/cart/decr/<?= $key ?>"><img src="/images/minuss.jpg" width="20" height="20"
                                                                        alt=""></a>
              </div>
              <div class="price"> Цена: <?= $cost ?></div>
              <div class="number"><a href="/cart/delete/<?= $key ?>"> Удалить </a></div>
            </div>
            <hr>
                <?php
            }
            echo "Всего товаров - " . $_SESSION['cartCount'] . "</br>";
            echo "Итого - " . $_SESSION['cartCost'];
      else :
          echo '<div class="img"><img src="/images/basket.png" ></div>';
      endif;
        ?>
  </div>
</div>

