#!/bin/sh

if ! php -v 2>&1 >/dev/null
then
	echo "No php detected. exiting."
	exit 1
fi

if ! test -f "./.env" 2>&1 >/dev/null
then
	cp ./.env.example ./.env
fi

php artisan migrate
#todo: check if key is already generated
#php artisan key:generate
npm run dev &
php artisan serve

