<div class="container-home">
<?php
include_once 'public/view/goods_list/list.php';
    foreach ($list as $val)
    {
?>
  <div class="container-list">
    <p><?=$val['name']?></p>
    <img src="/images/<?=$val['id']?>01.jpg" width="200" height="150" alt="ноутбук">
    <a href="?page=product&id=<?=$val['id']?>"><p>подробнее о товаре</p></a>
  </div>
<?php
    }
?>
</div>



