<?php
    $erro = "";
    $email_preenchido = "";
    $sucesso = "";
    $email = "";
    $password = "";
    $confpass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST")
        $email = trim($_POST["email"]);
        $password = $_POST["password"] ?? "";
        $confpass = $_POST["confpass"] ?? "";
        
        if (empty($email) || empty($password) || empty($confpass)){
            $erro = "";
            $erro = "Por Favor preencha todos os campos." ;

        } elseif ($password != $confpass){
            $erro = "";
            $erro = "A senha e a comfirmação não são iguais";
        } elseif(strlen($password) < 6) {
            $erro = "A senha precisa ter no mínimo 6 caracteres.";
            
        }


    if (empty($erro)){
        $sucesso = "Cadastrado com sucesso.";
        require_once 'enviardb.php';
    }
    
?>



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
        <?php if($erro):?>
            <p><?= $erro ?></p>
            <?php $erro = ""?>
            <?php endif;?>
        <?php if ($sucesso):?>
            <p><?= $sucesso ?></p>
        <?php endif;?>
        <h2>Criar conta</h2>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
            <label for="email">Digite seu email:</label>
            <input type="text" name="email" id="idemail" value="<?= $email ?>">
            <label for="password">Digite uma senha:</label>
            <input type="password" name="password" id="idpassword">
            <label for="confpass">Confirme sua senha:</label>
            <input type="password" name="confpass" id="idconfpass">
            <a href="index.php"><input type="submit" value="Cadastra"></a>
        </form>

    </main>
</body>
</html>