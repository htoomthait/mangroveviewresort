# Development (with hot-reload)

## Build and start

<!-- Uses Dockerfile.dev with auto-migrations, storage linking, and debugging enabled -->
docker-compose -f docker-compose.yml -f docker-compose.dev.yml up -d --build

## View development logs

docker-compose -f docker-compose.yml -f docker-compose.dev.yml logs -f app

## Run artisan commands

<!-- Note: Migrations run automatically on container start in dev mode -->
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app php artisan db:seed
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app php artisan tinker
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app php artisan queue:work

## Install/Update composer dependencies

<!-- Composer install runs automatically on container start -->
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app composer install
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app composer update

## Install/Update npm dependencies and build

docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app npm install
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app npm run dev
docker-compose -f docker-compose.yml -f docker-compose.dev.yml exec app npm run watch

## Stop

docker-compose -f docker-compose.yml -f docker-compose.dev.yml down


# Production

## Build and start

<!-- Uses optimized Dockerfile with --no-dev dependencies -->
docker-compose up -d --build

## View production logs

docker-compose logs -f app

## Run migrations

<!-- Important: Run migrations manually in production -->
docker-compose exec app php artisan migrate --force

## Optimize for production

docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
docker-compose exec app php artisan optimize

## Clear caches if needed

docker-compose exec app php artisan config:clear
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan view:clear


# Useful commands

## Shell access

docker-compose exec app sh

## MySQL access

docker-compose exec db mysql -u laravel -psecret laravel

## Redis CLI

docker-compose exec redis redis-cli

## View MailHog (email testing)

<!-- Access at http://localhost:8025 -->
Open browser to http://localhost:8025

## Check container status

docker-compose ps

## Restart specific service

docker-compose restart app
docker-compose restart db

## Clear everything and rebuild

<!-- Removes all containers, networks, and volumes -->
docker-compose down -v
docker-compose up -d --build
