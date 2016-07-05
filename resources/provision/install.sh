#!/usr/bin/env bash

# remap document root from '/var/www/public' to '/var/www/public_html'
mv /var/www/public /var/www/public_html
sudo sed -i s,/var/www/public,/var/www/public_html,g /etc/apache2/sites-available/000-default.conf
sudo sed -i s,/var/www/public,/var/www/public_html,g /etc/apache2/sites-available/scotchbox.local.conf
sudo service apache2 restart

echo "Installing virtual host files...";

# CREATE WEBLEARN.DEV

# copy 'scotchbox.local.conf' and create 'weblearn.dev.conf'
sudo cp /etc/apache2/sites-available/scotchbox.local.conf /etc/apache2/sites-available/weblearn.dev.conf

# replace all text occurrences of 'scotchbox.local' with 'weblearn.dev'
sudo sed -i s,scotchbox.local,weblearn.dev,g /etc/apache2/sites-available/weblearn.dev.conf

# refresh new virtual host files
sudo a2ensite weblearn.dev.conf

# reload apache server
sudo service apache2 reload