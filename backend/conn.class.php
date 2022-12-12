<?php
session_start();

class conn{

    public function connect(){

        $usuario = 'root';
        $senha = '';
        $dbname = 'michele';
        $host = 'localhost';

        $pdo = new PDO('mysql:host='.$host.';dbname='.$dbname, $usuario, $senha);

        return $pdo;

    }

    public function disconnect(){

        return null;

    }

}