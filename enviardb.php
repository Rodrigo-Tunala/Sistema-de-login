<?php 
        require("conexao.php");
        
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $email = $_POST["email"] ?? "";
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT) ?? "";

            $query = "INSERT INTO login (email, password) VALUES (:email, :password)" ;

            $stmt = $pdo->prepare($query);
            $stmt->execute([
                
                ':email'    => $email,
                ':password' => $password,
                
            ]);

            
            header("Location: index.php");
            exit;
        };
    ?>