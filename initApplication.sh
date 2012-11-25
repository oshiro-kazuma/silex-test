#!/bin/sh

# cache 777
chmod -R 777 cache

# composer install
curl -s https://getcomposer.org/installer | php
php composer.phar install

# create sqlite3 db
sqlite3 ./db/app.db < ./db/build.sql

chown  apache:apache ./db/app.db

