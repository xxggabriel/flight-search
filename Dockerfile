### STAGE 1: Build ###
FROM serversideup/php:8.2-fpm-nginx-v3.2.0

# Switch to root so we can do root things
USER root

# Install the intl extension with root permissions
RUN install-php-extensions intl gd

WORKDIR /home

# INSTALL NODEJS

# RUN curl -sL https://deb.nodesource.com/setup_18.x -o nodesource_setup.sh
# RUN bash nodesource_setup.sh
# RUN apt install nodejs -y
# RUN apt-get update
# RUN apt-get install zlib1g fontconfig -y

USER www-data

WORKDIR /var/www/html

COPY --chown=www-data:www-data . .

# RUN COMPOSER INSTALL

# RUN composer install --optimize-autoloader \
#     && mkdir -p storage/logs

RUN chmod -R 777 ./storage ./bootstrap/cache

# RUN COMPOSER INSTALL AND RUN BUILD
# RUN npm install \
#     && npm run build


