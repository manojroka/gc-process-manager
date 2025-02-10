#!/bin/sh

if ! php -v 2>&1 >/dev/null
then
	echo "No php detected. installing."
	
	
fi


php artisan migrate
php artisan db:seed
php artisan serve