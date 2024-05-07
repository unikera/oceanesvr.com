# Utilise l'image officielle PHP avec Apache
FROM php:8.1-apache

# Installe les extensions pdo_mysql nécessaires pour MariaDB/MySQL
RUN docker-php-ext-install pdo pdo_mysql

# Définir le répertoire de travail
WORKDIR /var/www/html/

# Copie les fichiers de l'application dans le conteneur
COPY . /var/www/html/

# Donne les permissions nécessaires sur le dossier
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Expose le port 80 pour permettre l'accès au serveur Apache
EXPOSE 80
