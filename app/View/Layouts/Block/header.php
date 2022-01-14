<?php
if (isset($_SESSION['name'])) {
    extract($_SESSION);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $title ?></title>
  <link rel="icon" href="../images/logo_files/favic.ico" type="image/x-icon">


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
          integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
          crossorigin="anonymous"></script>

  <!--  <script src="/../vendor/twbs/bootstrap/dist/js/bootstrap.js"></script>-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">

  <script src="/style/script.js"></script>
  <link href="/style/style.css" rel="stylesheet" type="text/css">

</head>
<body>
<div id="container">
  <header class="header dark">
    <h2>laptop Shop</h2>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav me-auto mb-2 mb-md-0">
            <li>
              <a class="nav-link active" aria-current="page" href="/home/index">Home</a>
            </li>
            <li>
              <a class="nav-link" href="/goods/show">Товары</a>
            </li>
              <?php
              if (empty($name)) :
                  ?>
                <li>
                  <a class="nav-link" href="/user/login">Log in</a>
                </li>
                <li>
                  <a class="nav-link" href="/user/reg">Sign up</a>
                </li>
              <?php
              else :
                  ?>
                <li>
                  <a class='nav-link' href='/user/logout'>Выход</a>
                </li>
                <li>
                  <a class='nav-link' href='/user/index'>
                    <img src='/images/user.jpg' width='20' height='20' alt='user'>
                  </a>
                </li>
              <?php
              endif;
              if (!empty($_SESSION['products'])) :
                  ?>
                <li>
                  <a class='nav-link' href='/cart/show'><img src='/images/cart.jpg' width='25' height='25' alt='cart'>
                      <?= $_SESSION['cartCount'] ?></a>
                </li>
              <?php
              endif;
              ?>
          </ul>
          <div class="container-search">
          <form class="d-flex">
            <input class="form-control me-2" placeholder="Поиск" value="<?= $search ?? ''; ?>"
                   onkeyup="checkEvent()" aria-label="Search" id="search" autocomplete="off">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>


          <ul class="results me-2"></ul>

        </div>
        </div>
    </nav>
  </header>

  <main>
    <div class="sidenav">
      <div class="side">
        <a href="https://www.pc-school.ru/kratkaya-istoriya-noutbukov/?utm_referrer=https%3A%2F%2Fwww.google.com%2F">
          About</a>
        <a href="https://freshit.ua/service-center/remont-noutbukov-kharkov.html">Services</a>
        <a href="https://www.facebook.com/campaign/landing.php?&campaign_id=1600506847&extra_1=s%7Cc%7C515922865592%7
        Ce%7Cfacebook%7C&placement=&creative=515922865592&keyword=facebook&partner_id=googlesem&extra_2=campaignid%3D1
        600506847%26adgroupid%3D60825662376%26matchtype%3De%26network%3Dg%26source%3Dnotmobile%26search_or_content%3Ds%
        26device%3Dc%26devicemodel%3D%26adposition%3D%26target%3D%26targetid%3Dkwd-541132862%26loc_physical_ms%3D103044
        6%26loc_interest_ms%3D%26feeditemid%3D%26param1%3D%26param2%3D&gclid=Cj0KCQiAtJeNBhCVARIsANJUJ2GOqLR8xdzrmOe3Cs
        mPsrK6dwDspOgDpPRR4qwjB8F_Xhv6ygbIF8AaAqp0EALw_wcB">Clients</a>
        <a href="https://rozetka.com.ua/?gclid=Cj0KCQiAtJeNBhCVARIsANJUJ2GxHMTzymFcrtpZ_qpfdjZvzhb6eAehTdbGAuEdQUCqDk
        GCcnCjdcAaAlWjEALw_wcB">Contact</a>
      </div>
    </div>



