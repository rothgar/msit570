#!/bin/bash
docker run -it --rm --name zodiac -v "$(pwd)":/var/www/html php:5.6-apache
