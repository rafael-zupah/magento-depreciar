FROM php:8.1-apache-buster

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
    && apt-get install -y -qq \
        imagemagick libmagickwand-dev \
        libzip-dev zip libc-client-dev libkrb5-dev libxml2-dev supervisor \
        wget gnupg2 ca-certificates lsb-release apt-transport-https procps libbz2-dev \
        libgmp-dev libxslt-dev libpng-dev \
        libjpeg62-turbo-dev libsodium-dev libfreetype6-dev \
    && docker-php-ext-configure imap --with-kerberos --with-imap-ssl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
        bcmath simplexml sockets zip pdo_mysql imap opcache soap bz2 gmp intl xml xsl gd pcntl sodium\
    && pecl install redis \
    && docker-php-ext-enable bcmath gd intl pdo_mysql simplexml soap zip sockets redis xml xsl sodium \
    && rm -r /var/lib/apt/lists/*


# Instalar e configurar o Xdebug
RUN pecl install xdebug-3.2.1 \
    && docker-php-ext-enable xdebug

# Instalar e configurar o imagick
RUN pecl install imagick \
    && docker-php-ext-enable imagick

COPY ./conf.d/90-opcache.ini "${PHP_INI_DIR}/conf.d"
COPY ./conf.d/90-xdebug.ini "${PHP_INI_DIR}/conf.d"

# Instalar composer
RUN  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /tmp/*

ARG imagemagic_config=/etc/ImageMagick-6/policy.xml
RUN if [ -f $imagemagic_config ] ; then sed -i 's/<policy domain="coder" rights="none" pattern="PDF" \/>/<policy domain="coder" rights="read|write" pattern="PDF" \/>/g' $imagemagic_config ; else echo did not see file $imagemagic_config ; fi
# Nesta primeira versão do Docker não iremos implementar usuários e grupos
RUN mkdir -m 777 /tmp/files
EXPOSE 80
EXPOSE 443