<?php

$layout = "public/view/block/layout.php";
$params = $_GET['id'];
$template = $_GET['page'];
function render($layout, $template = null, $params = null)
{
        $sourse = $template.".php";
    echo $content = "public/view/pages/".$sourse;
    echo "<br>";
    include_once  $layout;
}
render($layout,$template, $params);



