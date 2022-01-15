<?php

namespace api\config;

use Exception;
use PDO;

class Db
{
    public PDO $db;

    public function __construct()
    {
        $config = [
            'host' => 'localhost',
            'name' => 'Bora_db',
            'user' => 'tttolll',
            'password' => 'tttolll'
        ];
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

    public function query(string $sql, array $params = []): ?array
    {
        $sth = $this->treatment($sql, $params);
        return $sth->fetch(PDO::FETCH_ASSOC);
    }

    public function querySearch(string $sql): ?array
    {
        $sth = $this->db->query($sql);
        return $sth->fetchAll(PDO::FETCH_ASSOC);
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
