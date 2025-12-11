# Sistema de Login

🚀 Um sistema de autenticação de usuários simples em **PHP , desenvolvido para gerenciar cadastro e login de usuários.

## 📌 Descrição

Este projeto é um **sistema de login funcional** feito com PHP, ideal para estudos e prática de autenticação. Ele permite que usuários **cadastrem suas informações**, façam **login** e acessem uma página inicial protegida. :contentReference[oaicite:1]{index=1}

## 🧰 Tecnologias

O projeto foi desenvolvido com:

- PHP  
- HTML  
- CSS       `# O CSS não foi feito por mim.Usei um pronto do curso do Gustavo Guanabara.` 
- MySQL ou outro SGBD (via conexão no `conexao.php`) :contentReference[oaicite:2]{index=2}

## 📂 Estrutura do projeto

| Arquivo | Função |
|---------|--------|
| `index.php` | Página de login |
| `cadastro.php` | Formulário de cadastro |
| `conexao.php` | Conexão com o banco de dados |
| `inicial.php` | Página inicial após login |
| `style.css` | Estilos de layout |
| `enviardb.php` | Script para processar e gravar dados no banco |
| `LICENSE` | Licença MIT | :contentReference[oaicite:3]{index=3}

## 🛠️ Como rodar

1. Clone este repositório:
   ```bash
   git clone https://github.com/Rodrigo-Tunala/Sistema-de-login.git
  
  Coloque os arquivos em um servidor local (como XAMPP, MAMP ou WAMP).

2. Crie um banco de dados no MySQL e configure conexao.php com seus parâmetros:

  - host

  - usuário

  - senha

  - nome do banco

3. Importe a tabela de usuários no banco (ou crie conforme sua necessidade).

Acesse o sistema via navegador:
  ```bash 
    http://localhost/Sistema-de-login/
  ```

Obs.: Você pode criar a tabela usuarios com campos como id, nome, email e senha para funcionar corretamente.

📌 Funcionalidades

✔ Cadastro de usuário
✔ Login de usuário
✔ Conexão com banco de dados
✔ Redirecionamento após login

🤝 Contribuição

Se quiser contribuir com melhorias ou novas funcionalidades (como criptografia de senha, validação, recuperação de senha, etc.), fique à vontade para abrir um Pull Request!

📄 Licença

Este projeto está licenciado sob a MIT License — consulte o arquivo LICENSE para mais detalhes.
