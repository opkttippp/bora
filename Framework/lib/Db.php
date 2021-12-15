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

    public function query(string $sql, array $params = [], string $className = 'stdClass'): ?array
    {
        $sth = $this->db->prepare($sql);
        foreach ($params as $key => $val) {
            $sth->bindValue(":$key", $val);
        }
        $result = $sth->execute($params);

        if (false === $result) {
            return null;
        }
        return $sth->fetchAll(PDO::FETCH_ASSOC);
//        return $sth->fetchAll(\PDO::FETCH_CLASS, $className);
    }
}
