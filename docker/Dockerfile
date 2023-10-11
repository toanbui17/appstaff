FROM bitnami/laravel:latest

RUN curl -sS https://getcomposer.org/installer | php \ && mv composer.phar /usr/local/bin/composer

RUN curl https://raw.githubusercontent.com/composer/getcomposer.org/master/web/installer | php -- --install-dir=bin --filename=composer


RUN mkdir /application && chown 1000:1000 -R /application

WORKDIR /application
