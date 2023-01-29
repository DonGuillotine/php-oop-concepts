<?php

class read extends db{

    public function reader(){

        $sql = 'SELECT * FROM users';
        $stmt = $this->connection()->query($sql);
        while ($row = $stmt->fetch()){
           echo $row['Name'];
        }

    }
}