# Use a imagem base do PHP com Apache
FROM php:8.3-rc-apache

# Copie o arquivo index.php para o diretório /var/www/html/
COPY index.php /var/www/html/

# Exponha a porta 80 para acesso HTTP
EXPOSE 80