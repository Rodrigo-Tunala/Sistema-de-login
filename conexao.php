<?php 

    $servername = "localhost";
    $username = "root";
    $password = "";
    $banco = "teste";
    $port = "3308";

    try {
        $pdo = new PDO("mysql:host=$servername;port=$port;dbname=$banco;charset=utf8", $username, $password);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(Exception $e){
        echo "Erro :" . $e->getMessage();
    }

        


?>