#!/bin/bash -x
service mysql start
service php7.3-fpm start
echo "Creamos la bdd si no existe..."
mysql -e 'create database wordpress;' && \
mysql -e 'grant all privileges on wordpress.* to "devops"@"localhost" identified by "vahKei4ovah0ieLasohaceiTahxeelae";' && \
mysql -e 'flush privileges;'
echo "Arrancamos el proceso de nginx"
nginx -g 'daemon off;'