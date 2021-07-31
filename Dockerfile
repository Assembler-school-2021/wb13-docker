FROM debian:stable

RUN apt -y update && \
    apt install -y mysql* nginx php-fpm php-cli php-mysql php-gd php-imap php-ldap php-odbc php-pear php-xml php-xmlrpc php-mbstring php-snmp php-soap php-tidy pwgen python-setuptools curl git tar
ADD ./start.sh /start.sh
ADD ./nginx-site.conf /etc/nginx/sites-enabled/default
ADD http://wordpress.org/latest.tar.gz /wordpress.tar.gz
RUN tar xvzf /wordpress.tar.gz
RUN mv /wordpress /var/www/
ADD wp-config.php /var/www/wordpress/wp-config.php
RUN chown -R www-data: /var/www/
RUN chmod 755 /start.sh

EXPOSE 80

ENTRYPOINT ["/bin/bash", "/start.sh"]
