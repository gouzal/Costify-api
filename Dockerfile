FROM php:7.4-cli
COPY . /usr/src/costify
WORKDIR /usr/src/costify
EXPOSE 8080
CMD [ "php", "artisan", "serve" ]