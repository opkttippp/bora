<div class="container-home">
    <?php
    include_once 'public/view/goods_list/list.php';
    $id = $_GET['id'];
    foreach ($list as $val) {
    if ($val['id'] == $id) {
    ?>
  <h3><?= $val['name']?></h3>
  <div class="big-img">
    <img src="/images/<?= $val['id'] ?>01.jpg" width="420" height="320" alt="ноутбук">
  </div>
  <div class="small-img">
    <img src="/images/<?= $val['id'] ?>02.jpg" width="170" height="120" alt="ноутбук">
    <img src="/images/<?= $val['id'] ?>03.jpg" width="170" height="120" alt="ноутбук">
  </div>
  <div class="text">
    <p><?php
        echo $val['desc'] ?>;
      ?>
    </p>
  </div>
  <div class="buy">
    <form action="/index.php?page=card&id=<?=$val['id']?>" method="post">
      <input type="submit" class="button4" value="Купить" >
    </form>
  <div class="count">
    <p>Осталось - <?= $val['count'] ?> шт.</p>
  </div>
</div>
<?php }
}

