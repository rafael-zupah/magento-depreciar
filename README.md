# instalação do ambiente de desenvolvimento magento

Magento Versão 2.4.6

- template Kalles
- modules
    - multivendor
    - stmp

**Configure o domínio Zupah em seu OS**

Configure o host dev.zupah.com.br em seu sistema operacional


***windows***
  ```sh
c:\windows\drivers\etc\hosts
127.0.0.1 dev.zupah.com.br
  ```

***linux***
  ```sh
/etc/hosts
127.0.0.1 dev.zupah.com.br
  ```

**Subindo Docker**
  ```sh
    make up
  ```

**Criando base de dados**
  ```sh
    rsync -a root@loja.meece.com.br:/var/www/dump.tar.gz .docker/mysql/dumps
    cd .docker/mysql/dumps
    tar -xzf dump.tar.gz
    rm -f dump.tar.gz
    cd ../../../
  ```

  ```sh
    make mysql
  ```

  ```sh
    create database magento;
    use magento;
    source /tmp/dumps/dump.sql;
    exit;
  ```

**Instalando Magento no Servidor PHP**
  ```sh
    rsync -a root@loja.meece.com.br:/var/www/html.tar.gz .
    tar -xzf html.tar.gz
    rm -f html/app/etc/env.php
    rm -f html/bin/magento
    cp zupah/app/etc/env.php html/app/etc
    cp zupah/bin/magento html/bin
    ln -s /var/www/html/zupah/vendor/zupah zupah
    mv html src
    cd src
    sudo chmod 777 -R *

    cd app/code
    sudo ln -s ../../../zupah/app/code/Zupah Zupah

    cd ../../../
  ```

  ```sh
    make bash
  ```

  ```sh
    cd /var/www/html/src
    php bin/magento setup:store-config:set --base-url="http://dev.zupah.com.br/"
    php bin/magento setup:store-config:set --base-url-secure="https://dev.zupah.com.br/"
    bin/magento config:set catalog/search/engine 'elasticsearch7'
    bin/magento config:set catalog/search/elasticsearch7_server_hostname 'zupah-elasticsearch'
    php bin/magento cache:flush
    php bin/magento indexer:reindex
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy -f
    chmod 777 -R pub var generated
  ```