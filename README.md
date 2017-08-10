# pulsir4
A rewrite of the Pulsir core with goals to increase code maintainability.
Demo is available at http://4.area51.pulsir.eu/

# Instalation
```
  git clone https://github.com/pulsir/pulsir4
  cd pulsir4
  composer install
  cp .env.example .env | copy if you are using Windows
  php artisan key:generate
  php artisan storage:link
  php artisan migrate // Make sure you setup database connection in .env before doing this
  php artisan serve
```
