FROM php:7.4-fpm

# Arguments defined in docker-compose.yml
ARG xdebug

# Install system dependencies
RUN apt-get update && apt-get install -y \
    vim \
    cron \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

# Install Xdebug
RUN if [ $xdebug = "true" ] ; then \
    pecl install xdebug; \
    docker-php-ext-enable xdebug; \
    echo "error_reporting=E_ALL" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "display_startup_errors=On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "display_errors=On" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    echo "xdebug.remote_enable=1" >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini; \
    fi ;

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Remove existing html directory set by apache
RUN rm -rf /var/www/html

# Set working directory
WORKDIR /var/www/app

COPY . .

# Fix files and permissions
RUN chown -R www-data: storage bootstrap
RUN chmod 766 -R /var/www/app/bootstrap
RUN ls -lart /var/www/app/bootstrap

# Create .env file
COPY .env.example .env

RUN ls -la
