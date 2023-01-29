<?php

class db{
    private string $host = 'localhost';
    private string $user = 'root';
    private string $password = '';
    private string $db_name = 'my_oop';

    protected function connection(){
        $dsn = 'mysql:host' . $this->host . ';db_name=' . $this->db_name;
        $pdo = new PDO($dsn, $this->user, $this->password);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::ATTR_DEFAULT_FETCH_MODE);
        if ($pdo == false){
            echo "Connection Failed";
        }
        return $pdo;
    }
}