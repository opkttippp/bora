<?php

namespace Framework\lib;

use Exception;
use PDO;

class Db
{
    public PDO $db;

    public function __construct()
    {
        $config = require '../Framework/Config/Db.php';
        try {
            $this->db = new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['name'],
                $config['user'],
                $config['password']
            );
        } catch (Exception $e) {
            echo "Database connect error: " . $e->getMessage();
        }
    }

    public function insert(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->treatment($sql, $params);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }





    public function queryAll(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->treatment($sql, $params);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
    }

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->treatment($sql, $params);
        return $sth->fetch(PDO::FETCH_ASSOC);
//        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }

    public function treatment($sql, $params)
    {
        $sth = $this->db->prepare($sql);
        foreach ($params as $key => $val) {
            $sth->bindValue(":$key", $val);
        }
        if ($sth->execute($params)) {
            return $sth;
        } else {
            return false;
        }
    }
}
