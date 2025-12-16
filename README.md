# 🔒 Sistema de Login PHP com Docker Compose

Projeto de demonstração de um **sistema simples de login e cadastro** desenvolvido em **PHP**, utilizando **Docker Compose** para criar um ambiente de desenvolvimento isolado, rápido e consistente.

## 🛠️ Tecnologias Utilizadas

- PHP 8.x (Apache)
- MySQL 8.0
- Docker
- Docker Compose

## 🚀 Como Executar o Projeto

**Siga os passos abaixo para rodar o projeto localmente.**

## ✅ Pré-requisitos

Instale os seguintes softwares:

- Docker Engine  
  https://docs.docker.com/engine/install/

- Docker Compose (V2)  
  https://docs.docker.com/compose/install/

## 📥 1. Clonar o Repositório

```bash
git clone https://github.com/Rodrigo-Tunala/Sistema-de-login.git
cd Sistema-de-login
```
## 🐳 2. Subir o Ambiente Docker
- **Execute o comando abaixo na raiz do projeto:**

```bash
docker-compose up -d --build
```

- **⚠️ Resetar o Banco de Dados (Opcional)**
```bash
docker-compose down -v
```
O parâmetro ```-v``` remove o volume do MySQL e apaga todos os dados.

## 🌐 3. Acessar a Aplicação
- **Acesse no navegador:**

```bash
http://localhost:8080
```
## ⚙️ Arquitetura do Projeto

O ambiente Docker é composto por dois serviços conectados em rede interna.

- **📦 Serviços**

| Serviço | Container  | Porta | Função       |
| ------- | ---------- | ----- | ------------ |
| web     | webapp-php | 8080  | Apache + PHP |
| db      | mysql-db   | 3308  | MySQL 8      |

- **🔐 Configurações de Conexão com o Banco**

As configurações estão sincronizadas entre ```conexao.php``` e ```docker-compose.yml```.



| Variável | Valor  |
| -------- | ------ |
| Host     | db     |
| Database | teste  |
| Usuário  | root   |
| Senha    | 123456 |




## 💾 Volumes e Persistência
- **Código da Aplicação**
```bash
.:/var/www/html
```
Permite edição do código em tempo real.

- **Inicialização do Banco**
```
./db_init:/docker-entrypoint-initdb.d
```
Executa automaticamente o script SQL.

- **Dados do MySQL**
```
db_data
```
Volume persistente do banco de dados.

## 👨‍💻 Comandos Essenciais
- **Parar os Containers**

```bash
docker-compose down
```
- **Parar e Apagar os Dados do Banco**
```bash

docker-compose down -v
```
- **Acessar o Terminal do Container PHP**

```bash

docker-compose exec web bash
```
- **Acessar o MySQL**
```bash

docker-compose exec db mysql -u root -p
```
- **Senha do banco:**

```
123456
```
## 📄 Licença
**Este projeto está sob a licença MIT.**

✨ Observações Finais
Projeto ideal para estudos de:
- PHP
- MySQL
- Docker

Base inicial para sistemas maiores.
