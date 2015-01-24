#!/bin/bash
docker run -it --rm --name zodiac -v "$(pwd)":/var/www/html -v "$(pwd)"/php.ini:/usr/local/etc/php/php.ini php:5.6-apache
