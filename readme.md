## Installation instructions

* In the terminal run **"composer install"** to install all vendor packages
* Add .env file and configure it. You can use the example file, but running **"cp .env.example .env"** and then configure to your own details
* Run **"php artisan key:generate"** to generate the app key
* Run **"touch database/database.sqlite"** to create the sqlite database. You shall of course skip this step if you choose to use a MySQL or PostgreSQl database. However you then shall change the **DB_CONNECTION** in the .env file to sqlite, mysql or pgsql. If you are using sqlite, please **remove the DB_DATABASE line** from .env file.
* Run **"php artisan migrate --seed"** to create the database structure and import data to the database.
