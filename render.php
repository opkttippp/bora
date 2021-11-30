<?php

class render

{
    function rend( $layout, $template = null, $params = null)
    {
        ob_start();
        $sourse = $template.".php";
        $content = "public/view/pages/".$sourse;
        include_once $layout;
        echo ob_get_clean();
        return $params;
    }
}