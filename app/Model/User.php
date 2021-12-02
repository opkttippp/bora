<?php

namespace App\Model;

class User
{
    public function log($login, $pass)
    {
        include_once "../src/user/admin.php";
        if (isset($user)) {
            if ($login == $user['login'] && $pass == $user['pass']) {
                $_SESSION['login'] = $login;
            }
            return false;
        }
        return false;
    }
}

//
//    function del()
//    {
//        session_unset();
//        session_destroy();
//        header("Location:/home/index");
//    }
//
//    function val($login)
//    {
//        if (!isset($_SESSION['time'])) {
//            $_SESSION['user'] = $_SERVER['HTTP_USER_AGENT'];
//            $_SESSION['remote'] = $_SERVER['REMOTE_ADDR'];
//            $_SESSION['time'] = date("H:i:s");
//        }
//        if ((!isset($_SESSION['user']) || $_SESSION['user'] !== $_SERVER['HTTP_USER_AGENT'])
//            || (!isset($_SESSION['remote']) || $_SESSION['remote'] !== $_SERVER['REMOTE_ADDR']))
//            die('Ошибка подключения');
//        return $login;
//    }
