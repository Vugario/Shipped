help:
	@echo "\nAvailable commands:\n \
	 - provision: Build containers, run migrations, composer install\n \
	 - up: Start containers\n \
	 - down: Stop containers" \
	 - rebuild: Rebuild containers" \
	 - reload: Reload containers"

provision:
	docker-compose up -d
	make provision-composer
	cp .env.example .env
	docker-compose exec shipped_app php artisan key:generate
	make provision-database

provision-composer:
	docker-compose exec shipped_app composer.phar install --no-interaction

provision-database:
	docker-compose exec shipped_app php artisan migrate --seed

test:
	docker-compose exec shipped_app ./vendor/bin/phpunit

rebuild:
	docker-compose build

reload:
	docker-compose restart

up:
	docker-compose up -d

down:
	docker-compose down

tinker:
	docker-compose exec shipped_app php artisan tinker
