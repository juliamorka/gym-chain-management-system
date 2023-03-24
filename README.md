# :basketball: gym-chain-management-system
A web application supporting sport and recreational facilities chain management.
Requires PHP==8.1.2, composer==2.2.6 and sqlite>=2.8.17.
## :bulb: Running app for the first time
1. Copy base environment file: cp .env.example .env
2. Generate application key: php artisan key:generate
## :runner: Running app for development
From main project directory:
1. Install dependencies: composer update
2. Run migrations with seeders: php artisan migrate:fresh --seed
3. Run the server: php artisan serve
