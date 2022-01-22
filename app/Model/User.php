<?php

namespace App\Model;

use Framework\lib\Db;
use PDO;

class User
{
    public function log($login, $password)
    {
        $db = new Db();
        $sql = "SELECT *  FROM users INNER JOIN phone ON users.id = phone.users_id WHERE name = :login";
        $stat = $db->db->prepare($sql);
        $stat->bindValue(":login", $login);
        $stat->execute();
        $query = $stat->fetchAll(PDO::FETCH_ASSOC);
        if ((password_verify($password, $query[0]['pass']))) {
            $res = $this->listPhone($query);
            $this->sess($res);
            $this->sess($query[0]);
            header("Location:/user/index");
        } else {
            return false;
        }
    }

    public function listPhone($result)
    {
        $phone = [];
        $n = 1;
        foreach ($result as $val) {
            $phone ["phone_$n"] = $val['phone'];
            $n++;
        }
        return $phone;
    }

    public function reg(): bool
    {
        $db = new Db();
        $query = [];
        $phone = [];

        $query['name'] = $_POST['login'];
        $query['surname'] = $_POST['surname'];
        $query['pass'] = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $query['email'] = $_POST['email'];

        $phone['phone_1'] = (!empty($_POST['phone_1'])) ? $_POST['phone_1'] : 'телефон не указан';
        $phone['phone_2'] = (!empty($_POST['phone_2'])) ? $_POST['phone_2'] : 'телефон не указан';

        unset($_POST);

        $sql = "INSERT INTO users ( name, surname, pass, email) VALUES ( :name, :surname, :pass, :email)";
        $stat = $db->db->prepare($sql);
        $this->bind($stat, $query);

        if ($stat->execute()) {
            $id = $db->db->lastInsertId();
            foreach ($phone as $value) {
                $sq = " SET FOREIGN_KEY_CHECKS=0;
        INSERT INTO phone ( phone, users_id) VALUES ( :phone, $id )";
                $sta = $db->db->prepare($sq);
                $sta->bindValue(":phone", $value);
                $sta->execute();
            }
            header("Location:/user/login");
        }
        return false;
    }

    public function bind($stat, $query)
    {
        foreach ($query as $key => $value) {
            $stat->bindValue(":$key", $value);
        }
        return $stat;
    }

    public function sess($query)
    {
        foreach ($query as $key => $val) {
            $this->sess($key);
            $_SESSION[$key] = $val;
        }
    }
}
