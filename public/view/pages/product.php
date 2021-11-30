<!--<div class="container-home">-->
<!--    --><?php
//    include_once 'src/model/list.php';
//    foreach ($list as $val) {
//    if ($val['id'] == $params['id']) {
//    ?>
<!--  <h3>--><?//= $val['name'] ?><!--</h3>-->
<!--  <div class="big-img">-->
<!--    <img src="--><?//= $val['image_1'] ?><!--" width="420" height="320" alt="ноутбук">-->
<!--  </div>-->
<!--  <div class="small-img">-->
<!--    <img src="--><?//= $val['image_2'] ?><!--" width="170" height="120" alt="ноутбук">-->
<!--    <img src="--><?//= $val['image_3'] ?><!--" width="170" height="120" alt="ноутбук">-->
<!--  </div>-->
<!--  <div class="text">-->
<!--    <p>--><?php
//        echo $val['desc'] ?><!--;-->
<!--    </p>-->
<!--  </div>-->
<!--  <div class="buy">-->
<!--    <form action="/index.php?page=card&id=--><?//= $val['id'] ?><!--" method="post">-->
<!--      <input type="submit" class="button4" value="Купить">-->
<!--    </form>-->
<!--  </div>-->
<!--    <div class="count">-->
<!--      <p>Осталось - --><?//= $val['count'] ?><!-- шт.</p>-->
<!--    </div>-->
<!--</div>-->
<?php
//}}
?>
<div class="container-home">
    <?php
    include_once 'src/model/list.php';
    foreach ($list as $val) {
    if ($val['id'] == $params['id']) {
    ?>
  <div class="cont_1">
    <h3><?= $val['name'] ?></h3>
  </div>
    <div class="cont_2">
      <div class="big-img">
        <img src="<?= $val['image_1'] ?>" width="400" height="300" alt="ноутбук">
      </div>
      <div class="buy">
        <form action="/index.php?page=card&id=<?= $val['id'] ?>" method="post">
          <input type="submit" class="button4" value="Купить">
        </form>
      </div>
    </div>


<div class="cont_3">
  <div class="small-img">
    <img src="<?= $val['image_2'] ?>" width="170" height="120" alt="ноутбук">
    <img src="<?= $val['image_3'] ?>" width="170" height="120" alt="ноутбук">
  </div>
  <div class="text">
    <p><?php
        echo $val['desc'] ?>;
    </p>
  </div>
  <div class="count">
    <p>Осталось - <?= $val['count'] ?> шт.</p>
  </div>
</div>



</div>
<?php
}}