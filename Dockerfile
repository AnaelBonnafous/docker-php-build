FROM mysql:5.7 as mysql

ENV MYSQL_ROOT_PASSWORD root
ADD init.sql /docker-entrypoint-initdb.d

EXPOSE 3306

FROM php:8.0-apache as web

WORKDIR /var/www/html

COPY . .

EXPOSE 80