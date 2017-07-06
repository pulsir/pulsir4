# pulsir4
A rewrite of the Pulsir core with goals to increase code maintainability.

# Instalation
```
  git clone https://github.com/pulsir/pulsir4
  cd pulsir4
  composer install
  cp .env.example .env
  php artisan key:generate
  php artisan storage:link
  php artisan migrate // Make sure you setup database connection before doing this
  php artisan serve
```
