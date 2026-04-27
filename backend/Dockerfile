FROM php:8.4-fpm

# dependencies
RUN apt-get update && apt-get install -y \
    libpq-dev \
    libpng-dev \
    zip \
    unzip \
    git \
    curl

# extensions for PostgreSQL and Graphics (for Invoices)
RUN docker-php-ext-install pdo pdo_pgsql gd

# get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# set working directory
WORKDIR /var/www/html

# copy existing application directory contents
COPY . .

# Install dependencies inside the container
RUN composer install --no-scripts --no-autoloader

# finish composer
RUN composer dump-autoload

EXPOSE 9000

CMD ["php-fpm"]