<div class="container-home">
    <?php
    if (isset($list)) {
        foreach ($list as $val) {
            extract($val); ?>
          <div class="container-list">
            <p><?= $name ?></p>
            <img src="<?= $image_1 ?>" width="200" height="150" alt="ноутбук">
            <a href="/product/show/<?= $id ?>">
              <p>подробнее о товаре</p>
            </a>
          </div>
            <?php
        }
    }
    ?>
</div>



