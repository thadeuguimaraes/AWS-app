#!/bin/bash
cd /var/www/html
mv ../rds.conf.php .
mv ../s3-conf.php .
chown -R www-data:www-data *
