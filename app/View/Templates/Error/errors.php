<html>
<head>
  <title>Ошибка 404 – страница не найдена</title>
</head>
<body style='background-image: url("../images/error.png")'>
<ul>
    <?php
    $error = $error ?? '';
    echo "<pre>";
    print_r($error);
    ?>
  <li><a href='/'>Главная страница сайта</a></li>
</ul>
</body>
</html>


