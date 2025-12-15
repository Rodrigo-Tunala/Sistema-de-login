<?php 

    $servername = "db";
    $username = "root";
    $password = "123456";
    $banco = "teste";
    $port = "3306";

    try {
        $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$banco;charset=utf8", $username, $password);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        echo "Erro :" . $e->getMessage();
    }

        


?>