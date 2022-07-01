FROM php:8.1-fpm

# Install required packages
RUN apt-get update
RUN apt-get install -y git-core libzip-dev libpng-dev libfreetype6-dev libjpeg62-turbo-dev

# Install php extensions
# RUN printf "\n" | pecl install apcu xdebug
RUN docker-php-ext-install pdo_mysql zip gd

# Enable installed extensions
RUN docker-php-ext-enable zip

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --filename=composer --install-dir=/usr/local/bin

# Change workdir
WORKDIR /var/www

# Environment variables
ENV PATH="/srv/www/vendor/bin:$PATH"

CMD composer install ; php-fpm
