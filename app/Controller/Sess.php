<?php

namespace App\Controller;

class Sess
{
    public static function init(): void
    {
        session_start();

        if (isset($_SESSION['name'])) {
            Sess::val();
        }
    }

    public static function logout(): void
    {
        session_unset();
        setcookie('PHPSESSID', '', time() - 3600);
        session_destroy();
        header("Location:/user/login");
    }

    public static function val(): bool
    {
        if (!isset($_SESSION['time'])) {
            echo $_SESSION['user'] = $_SERVER['HTTP_USER_AGENT'];
            echo $_SESSION['remote'] = $_SERVER['REMOTE_ADDR'];
            echo $_SESSION['time'] = date("H:i:s");
        }
        if ((!isset($_SESSION['user']) || $_SESSION['user'] !== $_SERVER['HTTP_USER_AGENT'])
            || (!isset($_SESSION['remote']) || $_SESSION['remote'] !== $_SERVER['REMOTE_ADDR'])) {
            die('Ошибка авторизации');
        }
        return true;
    }
}
