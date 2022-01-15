<div class="container-home">
    <?php
    if (isset($list)) {
        foreach ($list as $key => $val) {
            ?>
          <div class="container-list">
            <p><?= $val->name; ?></p>
            <img src="<?= $val->image_1 ?>" width="200" height="150" alt="ноутбук">
            <a href="/product/show/<?= $val->id ?>">
              <p>подробнее о товаре</p>
            </a>
          </div>
            <?php
        }
    }
    ?>
</div>



