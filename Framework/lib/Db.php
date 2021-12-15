<?php

namespace Framework\lib;

use PDO;

class Db
{
    public PDO $db;

    public function __construct()
    {
        $config = require '../Framework/Config/Db.php';
        $this->db = new PDO(
            'mysql:host='.$config['host'].';dbname='.$config['name'],
            $config['user'],
            $config['password']
        );
    }
}
