<div class="container-home">
    <?php
    if (isset($list)) {
        ?>
  <h3><?= $list['name'] ?></h3>
  <div class="big-img">
    <img src="/images/<?= $list['id'] ?>01.jpg" width="350" height="300" alt="ноутбук">
  </div>
  <div class="small-img">
    <img src="/images/<?= $list['id'] ?>02.jpg" width="170" height="120" alt="ноутбук">
    <img src="/images/<?= $list['id'] ?>03.jpg" width="170" height="120" alt="ноутбук">
  </div>
  <div class="text">
    <p><?php
        echo $list['desc']; ?>
    </p>
  </div>
  <div class="count">
    <p>Осталось - <?= $list['count'] ?> шт.</p>
  </div>
  <div class="buy">
    <form class="" action="/cart/buy/<?= $list['id'] ?>" method="post">
      <input type="submit" class="button4" value="Купить">
    </form>
    <div class="count">
      <p>Осталось - <?= $list['count'] ?> шт.</p>
    </div>
  </div>
</div>
<?php
    }
