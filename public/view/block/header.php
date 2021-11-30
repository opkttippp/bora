<?php
session_id('1980');
session_name('PHPSESSID');
session_start();
if($_GET['action']=='logout'){
    $s = new sess();
    $s->del();
//    header("Location:/?page=login");
}
if ($_SESSION['login']) {
    $login = $_SESSION['login'];
    $s = new sess();
    $s->val($login);
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?=$params['page']?></title>
  <link rel="stylesheet" href="/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
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
              <a class="nav-link active" aria-current="page" href="?page=home">Home</a>
            </li>
            <li>
              <a class="nav-link" href="?page=goods">Товары</a>
            </li>
            <li>
              <a class="nav-link" href="?page=card">Корзина</a>
            </li>
              <?php
              if (!isset($login)){
                  echo
                '<li>
                  <a class="nav-link" href="?page=login">Log in</a>
                </li>';}
              else
              echo "
                <li>
                  <a class='nav-link' href='?action=logout'>Выход</a>
                </li>
              <li>
                <a class='nav-link' href='?page=admin'>
                <img src='/public/images/user.jpg' width='20' height='20' alt='user'>
                </a>
              </li>"
                ?>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
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



