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
        <form action="enviardb.php" method="post">
            <label for="email">Digite seu email:</label>
            <input type="text" name="email" id="idemail">
            <label for="password">Digite uma senha:</label>
            <input type="password" name="password" id="idpassword">
            <label for="confpass">Confirme sua senha:</label>
            <input type="password" name="confpass" id="idconfpass">
            <a href="http://localhost/cursophp/projetos/login/index.php"><input type="submit" value="Cadastra"></a>
        </form>
        
    </main>
</body>
</html>