# :basketball: gym-chain-management-system
A web application supporting sport and recreational facilities chain management. \
Requires PHP==8.1.2, composer==2.2.6 and sqlite>=2.8.17.
## :bulb: Running app for the first time
From main project directory:
1. Install dependencies: \
composer update
2. Copy base environment file: \
cp .env.example .env
3. Create sqlite database in database/ directory: \
sqlite database.sqlite
4. Generate application key: \
php artisan key:generate
5. Next follow the steps from "Running app for development" section.
## :runner: Running app for development
From main project directory:
1. Install dependencies (not necessary if composer.* files haven't been changed since last pull): \
composer update
2. Run migrations with seeders: \
php artisan migrate:fresh --seed
3. (for Windows) Run the npm: \
npm run dev
4. Run the server: \
php artisan serve
