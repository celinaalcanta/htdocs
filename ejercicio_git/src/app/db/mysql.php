<?php
use /mysqli;

namespace src\app\db;

class conexion extends mysqli {
    private $host ='127.0.0.1';
    private $user ='root';
    private $passwd ='1234';
    private $dbname ='biblioteca';
    private $port ='3306';
    

    
    public function __construct() {
      parent::__construct($this->host,$this->user,$this->passwd,$this->dbname,$this->port);
       var_dump($this->port);
    }
}
insert into users (name, lastname, email, password) values
('Kenia','Alcantar','celina7@gmail.com','5367476');