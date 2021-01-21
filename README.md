

## Installation

1. Clone the repo
   ```sh
   git clone https://github.com/AzKam17/Audimaf.git
   ```
3. Install Composer packages
   ```sh
   composer install
   ```
4. Create database 
   ```sh
   php bin/console d:d:c
   ```
5. Create migration &amp; migrate
   ```sh
   php bin/console m:migration && php bin/console d:m:m --no-interaction
   ```
6. Load fixtures
   ```sh
   php bin/console d:f:l --no-interaction
   ```
7. Launch server
   ```sh
   symfony serve
   ```
