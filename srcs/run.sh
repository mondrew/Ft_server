#!/bin/bash

#Configuring nginx to use php processor
cp ./mondrew_domain /etc/nginx/sites-available/localhost
ln -s /etc/nginx/sites-available/localhost /etc/nginx/sites-enabled/localhost
rm -rf /etc/nginx/sites-enabled/default
rm -rf /etc/nginx/sites-available/default

#phpmyadmin installation
cp -r phpmyadmin /var/www/html/
cp config.inc.php /var/www/html/phpmyadmin

#Wordpress installation
cp -r wordpress/. /var/www/html/
chmod 755 -R /var/www/html/*
cp -r wp-config.php /var/www/html/

#MySQL
service mysql start

mysql -u root << END

CREATE DATABASE wordpress;
GRANT ALL ON wordpress.* TO 'root'@'localhost' WITH GRANT OPTION;
update mysql.user set plugin='mysql_native_password' where user='root';
FLUSH PRIVILEGES;

END

mysql wordpress -u root --skip-password < ./wordpress.sql

#Configuring SSL keys
openssl req -x509 -nodes -days 365 -newkey rsa:2048 \
	-subj "/C=RU/ST=Moscow/L=MOSCOW/O=SCHOOL21/OU=mondrew/CN=localhost" \
	-keyout /etc/ssl/certs/localhost.key -out /etc/ssl/certs/localhost.pem
chown -R www-data /var/www/*

#php-fpm and nginx start 
service php7.3-fpm start
nginx -g 'daemon off;'
