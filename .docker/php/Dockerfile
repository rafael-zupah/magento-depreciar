FROM php:7.4-apache-buster
# Habilitando o modo de reescrita do Apache
RUN a2enmod ssl && a2enmod rewrite
RUN mkdir -p /etc/apache2/ssl
COPY ./ssl/*.pem /etc/apache2/ssl/
COPY ./apache/000-default.conf /etc/apache2/sites-available/000-default.conf
ENV PHP_OPCACHE_VALIDATE_TIMESTAMPS="0" \
    PHP_OPCACHE_MAX_ACCELERATED_FILES="10000" \
    PHP_OPCACHE_MEMORY_CONSUMPTION="192" \
    PHP_OPCACHE_MAX_WASTED_PERCENTAGE="10"
# Instalar Extensoes
RUN apt-get update -y \
    && apt-get install -y \
        imagemagick libmagickwand-dev \
        libzip-dev zip libc-client-dev libkrb5-dev libxml2-dev supervisor \
        wget gnupg2 ca-certificates lsb-release apt-transport-https procps libbz2-dev \
        libgmp-dev libxslt-dev libpng-dev \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-install \
        zip pdo_mysql imap opcache soap bz2 gmp intl xml xmlrpc xsl gd pcntl\
    && pecl install redis msgpack uploadprogress \
    && docker-php-ext-enable redis msgpack uploadprogress \
    && rm -r /var/lib/apt/lists/*;
    # imagem com "--disable-cgi"
# Instalar e configurar o Xdebug
RUN pecl install xdebug-2.9.8 \
    && docker-php-ext-enable xdebug;
    # echo “error_reporting=E_ALL” >> /etc/php.ini; \
RUN pecl install imagick \
    && docker-php-ext-enable imagick
    # echo “error_reporting=E_ALL” >>
COPY ./conf.d/opcache.ini /usr/local/etc/php/conf.d/opcache.ini
# Instalar composer
#RUN  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
#    && rm -rf /tmp/*;

RUN wget https://getcomposer.org/composer-1.phar \
    && chmod a+x composer-1.phar \
    && sudo mv composer-1.phar /usr/local/bin/composer1;

ARG imagemagic_config=/etc/ImageMagick-6/policy.xml
RUN if [ -f $imagemagic_config ] ; then sed -i 's/<policy domain="coder" rights="none" pattern="PDF" \/>/<policy domain="coder" rights="read|write" pattern="PDF" \/>/g' $imagemagic_config ; else echo did not see file $imagemagic_config ; fi
# Nesta primeira versão do Docker não iremos implementar usuários e grupos
RUN mkdir -m 777 /tmp/files
EXPOSE 80
EXPOSE 443