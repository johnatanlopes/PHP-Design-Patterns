<?php

class ConnectionFactory {

    public function getConnection() {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'design';

        return $con = mysqli_connect($host, $user, $pass, $banco);
    }

}