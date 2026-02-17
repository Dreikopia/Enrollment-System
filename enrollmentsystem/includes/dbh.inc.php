<?php

$dsn = "mysql:host=localhost;dbname=enrollment";
$db_user = "root";
$db_pass = "";

    try{
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e){
        echo "Connection failed" . $e->getMessage();
    }