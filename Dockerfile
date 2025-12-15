# Estágio 1: Build (para instalar dependências, se houver, ou apenas para usar como base)
FROM php:8.3-apache

# Define o diretório de trabalho dentro do container
WORKDIR /var/www/html

# Instala extensões PHP necessárias (ex: mysqli ou pdo_mysql para MySQL/MariaDB)
# Se você usa PostgreSQL, troque por pdo_pgsql.
# Se você tiver outras libs, adicione-as aqui.
RUN docker-php-ext-install pdo pdo_mysql

# Copia todos os arquivos do seu projeto para o diretório de trabalho
COPY . .

# Expõe a porta padrão do servidor web Apache dentro do container
EXPOSE 80

# O container irá rodar o servidor Apache automaticamente (definido na imagem base)
# Comando padrão: CMD ["apache2-foreground"]