FROM php:8.0-apache

#composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
    && php composer-setup.php --version=2.0.11 --install-dir=/bin --filename=composer \
    && php -r "unlink('composer-setup.php');"

#node
RUN curl -sL https://deb.nodesource.com/setup_14.x | bash - \
    && apt-get install -y nodejs

#configurações e extensoes
RUN apt install -y libzip-dev libpng-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install zip gd bcmath pdo pdo_mysql

RUN a2enmod rewrite
ADD vhost.conf /etc/apache2/sites-enabled/000-default.conf
ADD custom.ini /usr/local/etc/php/conf.d/custom.ini

EXPOSE 80
