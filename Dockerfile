# Use PHP with Apache as the base image
FROM php:8.4-apache

# Copy the FireHub phar
COPY ./phar /var/www/html/vendor/firehub/core-standard/phar

# Set the working directory
WORKDIR /var/www/html