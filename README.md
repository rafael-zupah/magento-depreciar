# magento-243
Magento Versão 2.4.3

**Criando base de dados**
  ```sh
    rsync -a root@loja.meece.com.br:/var/www/dump.tar.gz ./docker/mysql/dumps
    cd ./docker/mysql/dumps
    tar -xzf dump.tar.gz
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
    make bash
  ```

  ```sh
    cd /var/www/html
    rsync -a root@loja.meece.com.br:/var/www/html.tar.gz .
    tar -xzf html.tar.gz
    cp zupah/app/etc html/app/etc
    ln -s /var/www/html/zupah/vendor/zupah zupah
    mv html src
    cd src
    chmod 777 -R *
    php bin/magento setup:store-config:set --base-url="http://dev.meece.com.br/"
    php bin/magento setup:store-config:set --base-url-secure="https://dev.meece.com.br/"
    bin/magento config:set catalog/search/engine 'elasticsearch7'
    bin/magento config:set catalog/search/elasticsearch7_server_hostname 'meece-elasticsearch'
    php bin/magento cache:flush
    php bin/magento indexer:reindex
    php bin/magento setup:upgrade
    php bin/magento setup:di:compile
    php bin/magento setup:static-content:deploy -f
    chmod 777 -R pub var generated
  ```