# Base Image we are inheriting from: PHP 7.2. Required for Laravel to function
FROM php:7.2

# We expose port 8000 as we are to use it in order to access the container later on
EXPOSE 8000

# Our Docker file arguments
ARG PHP_VERSION=7.2
ARG COMPOSER_HASH=93b54496392c062774670ac18b134c3b3a95e5a5e5c8f1a9f115f203b75bf9a129d5daa8ba6a13e2cc8a1da0806388a8

# Set our working directory. Most peeps use /var/www
WORKDIR /usr/src/webapp

RUN php -m

# PHP-zip extension is not bundled with the Php image. we install it ourselves
RUN apt update && apt upgrade -y

RUN apt-get install -y libzip-dev unzip

RUN docker-php-ext-install zip

RUN yes | pecl install zip-1.15.4 && docker-php-ext-enable zip

# Install Mysql driver
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Install Composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" && \
    php -r "if (hash_file('sha384', 'composer-setup.php') === '${COMPOSER_HASH}') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;" && \
    php composer-setup.php --install-dir=/usr/bin --filename=composer && \
    php -r "unlink('composer-setup.php');"

# Copy contents of current folder into the work directory
COPY . .

# Copy contents of env.example to env
RUN cp .env.example .env

# Run composer install, generate key
# RUN composer update && php artisan key:generate

# TODO: Create a script to check if mysql server is up and running then try to migrate

# Use Php to run the app
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public/"]
