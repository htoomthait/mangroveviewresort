# Development (with hot-reload)

## Build and start

docker-compose -f docker-compose.yml -f docker-compose.dev.yml up -d --build

## View development logs

docker-compose logs -f app

## Run artisan commands

docker-compose exec app php artisan migrate
docker-compose exec app php artisan db:seed

## Install composer dependencies

docker-compose exec app composer install

## Install npm dependencies and build

docker-compose exec app npm install
docker-compose exec app npm run dev

## Stop

docker-compose down


# Production

## Build and start

docker-compose up -d --build

## View production logs

docker-compose logs -f

## Run migrations

docker-compose exec app php artisan migrate --force

## Optimize

docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache


# Useful commands

## Shell access

docker-compose exec app sh
    
## MySQL access

docker-compose exec db mysql -u laravel -psecret laravel

## Redis CLI

docker-compose exec redis redis-cli

## Clear everything and rebuild

docker-compose down -v
docker-compose up -d --build
