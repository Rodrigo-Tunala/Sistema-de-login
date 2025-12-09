<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
    
</head>
<body>
    <main>
        <h2>Criar conta</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="email">Digite seu email:</label>
            <input type="text" name="email" id="idemail">
            <label for="password">Digite uma senha:</label>
            <input type="password" name="password" id="idpassword">
            <input type="submit" value="Logar">
            <button type="button">Criar conta!</button>
        </form>
        
        <?php 
        require("conexao.php");

        if(isset($_POST["email"])){

            $email = $_POST["email"];
            $password = $_POST["password"];
            $return = "";

            $query = "SELECT * FROM login WHERE email = '$email' LIMIT 1";
            $stmt = $pdo->prepare($query);
            $stmt->execute();
            $usuario = $stmt->fetch(PDO::FETCH_ASSOC);;
            
            
            if (password_verify($password, $usuario['password'])){
                echo $return = "usuário logado!";
                header("Location: inicial.php");
                        exit;
            }else {
                echo $return = "Falha no login!</br> Verifique se o e-mail e a senha estão corretos";
            }
        }
        ?>
    </main>
    
    
</body>
</html>