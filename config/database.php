<?php
    function getConnection(){
       $host = "localhost";
       $db = "bibliotecadb";
       $user = "root";
       $pass = "root";

       try {
        //PDO - Php data objects
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8",username:$user,password:$pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
       catch (PDOException $e) {
        die("Erro: " . $e->getMessage());
       }
    }
?>