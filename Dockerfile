FROM wyveo/nginx-php-fpm:php81
RUN rm -rfv /usr/share/nginx/html/index.php 
WORKDIR /app
COPY /app /app
COPY ./index.php /usr/share/nginx/html/index.php
EXPOSE 5000
