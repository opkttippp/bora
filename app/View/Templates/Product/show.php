<div class="container-home">
    <?php
    if (isset($list)) {
            extract($list); ?>
  <div class="cont_1">
    <h3><?= $name ?></h3>
  </div>
  <div class="cont_2">
    <img src="<?= $image_1 ?>" width="350" height="270" alt="ноутбук">
  </div>
  <div class="cont_3">
    <div class="small-img">
      <img src="<?= $image_2 ?>" width="160" height="120" alt="ноутбук">
      <img src="<?= $image_3 ?>" width="160" height="120" alt="ноутбук">
    </div>
    <div class="text">
      <p><?php
          echo $description; ?>
      </p>
    </div>
  </div>
  <div class="count">
    <div>
      <p>Осталось - <?= $count ?> шт.</p>
    </div>

    <form class="" action="/cart/show/<?= $id ?>" method="post">
      <input type="submit" class="button4" value="Купить">
    </form>
  </div>
</div>
            <?php
    }
