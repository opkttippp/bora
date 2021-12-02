<?php

include_once('../app/View/Layouts/Block/header.php');
$content = $content ?? '../app/View/Layouts/Block/header.php';
include_once $content;
include_once('../app/View/Layouts/Block/footer.php');
