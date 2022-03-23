FROM php:8.0-fpm-alpine AS builder

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql calendar bcmath

WORKDIR /cloud-backend

COPY ./ /cloud-backend

RUN composer install

FROM php:8.0-fpm-alpine AS prod

WORKDIR /cloud-backend

# Type docker-php-ext-install to see available extensions
RUN docker-php-ext-install pdo pdo_mysql calendar bcmath

COPY --from=builder /cloud-backend /cloud-backend