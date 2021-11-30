<?php

class sess
{
    public function log($user)
    {
        if (!empty($_POST['login']) && !empty($_POST['Pass'])) {
            if ($_POST['login'] == $user['login'] && $_POST['Pass'] == $user['Pass']) {
                $_SESSION['login'] = $_POST['login'];
                unset($_POST);
                header("Location:/index.php?page=admin");
            }
        }
    }
    function del(){
    //   unset($_SESSION['login']);
    //   unset($_SESSION['pass']);
    //   setcookie('PHPSESSID', '', time()-3600);
        session_unset();
        header("Location:/?page=login");
    }
    function val($login){
      if (!isset($_SESSION['time'])) {
          $_SESSION['user'] = $_SERVER['HTTP_USER_AGENT'];
          $_SESSION['remote'] = $_SERVER['REMOTE_ADDR'];
//          $_SESSION['for'] = $_SERVER['HTTP_X_FORWARDED_FOR'];
          $_SESSION['time'] = date("H:i:s");
        }
       if((!isset($_SESSION['user']) || $_SESSION['user'] !== $_SERVER['HTTP_USER_AGENT'])
       || (!isset($_SESSION['remote']) || $_SESSION['remote'] !== $_SERVER['REMOTE_ADDR']))
           die('Ошибка подключения');
        return $login;
    }
}
?>
<!--<script>-->
<!--javascript:(function(){document.cookie='PHPSESSID=wwwwwwwww;path=/;';windows.location.reload();})()-->
<!--</script>-->