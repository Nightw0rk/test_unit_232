FROM php:7.2-fpm

RUN apt-get update && apt-get -y --no-install-recommends install \
    # gd
    libfreetype6-dev libjpeg62-turbo-dev libmcrypt-dev libpng-dev \
    # intl
    # libicu-dev \
    # imageick
    # libmagickwand-dev \
    # memcached    
    # libmemcached-dev zlib1g-dev \
    #&& pecl install memcached-2.2.0 \
    #&& docker-php-ext-enable memcached \
    && docker-php-ext-install pdo_mysql mbstring \
    && echo date.timezone=Asia/Jakarta >> /usr/local/etc/php/conf.d/php.ini \
    && echo upload_max_filesize = 100M >> /usr/local/etc/php/conf.d/php.ini \
    && echo post_max_size = 108M >> /usr/local/etc/php/conf.d/php.ini \
    # && echo extension=memcached.so >> /usr/local/etc/php/conf.d/memcached.ini \
    && apt-get autoremove -y \
    && rm -rf /tmp/* /var/tmp/*