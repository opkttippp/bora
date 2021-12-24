<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class User
{

    public function log($login, $password)
    {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        $db = new Db();
        $sql = "SELECT * FROM users WHERE name = :login";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":login", $login);
        $stat->execute();
        $query = $stat->fetch(PDO::FETCH_ASSOC);
        if ((password_verify($password, $query['pass']))) {
            $this->sess($query);
            header("Location:/user/index");
        } else {
            return false;
        }




    }

    public function reg(): bool
    {
        $db = new Db();
        $name = $_POST['login'];
        $surname = $_POST['surname'];
        $pass = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $email = $_POST['email'];
        unset($_POST);

        $sql = "INSERT INTO users ( name, surname, pass, email) VALUES ( :name, :surname, :pass, :email)";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":name", $name);
        $stat->bindValue(":surname", $surname);
        $stat->bindValue(":pass", $pass);
        $stat->bindValue(":email", $email);

        if ($stat->execute()) {
            header("Location:/user/login");
        }
        return false;
    }

    public function sess($query)
    {
        foreach ($query as $key => $val) {
            $_SESSION[$key] = $val;
        }
    }
}
