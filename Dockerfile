FROM arm64v8/php:8.3-fpm

# Install system dependencies
RUN apt-get update && apt-get install -y \
    libonig-dev \
    git \
    curl \
    zip \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring

# Set working directory
WORKDIR /var/www/html
