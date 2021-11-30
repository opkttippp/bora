<div class="container-home">
    <?php
    include_once 'src/model/list.php';
    foreach ($list as $val) {
        ?>
      <div class="container-list">
        <p><?= $val['name'] ?>
          <img src="<?= $val['image_1'] ?>" width="200" height="150" alt="ноутбук">
          <a href="?page=product&id=<?= $val['id'] ?>">
        <p>подробнее о товаре</p></a>
      </div>
        <?php
    }
    ?>
</div>



