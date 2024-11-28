FROM php:8.3-cli
RUN pecl install xdebug-3.3.2 \
	&& docker-php-ext-enable xdebug

ENV XDEBUG_MODE=coverage