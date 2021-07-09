FROM debian:buster

LABEL maintainer="Andrei Beseda <mondrew@student.21-school.ru>"

RUN	apt-get update
RUN apt-get upgrade -y
RUN apt-get install -y nginx mariadb-server php7.3-fpm php7.3-common \
php7.3-curl php7.3-intl php7.3-mbstring php7.3-xmlrpc php7.3-gd php7.3-xml \
php7.3-cli php7.3-zip php7.3-soap php7.3-imap php7.3-gmp php7.3-mysqli

RUN mkdir /usr/src/mondrew_website
WORKDIR /usr/src/mondrew_website
COPY srcs/. ./

EXPOSE 80 443

CMD bash run.sh
