# authenticator

This is a web application with a few pages that are restricted to non-authenticated users. It requires users to sign in to access these pages.

## Installation
  
To install this application, follow these steps:

1. Clone the repository to your local machine
2. Run `composer install` to install the necessary dependencies
3. Run `docker compose up` to start the application
4. Run `docker exec -it authenticator-php-fpm bash` to enter php-fpm-container
5. Inside container run fixtures load command to have one test user `php bin/console doctrine:fixtures:load`

## Usage 

To access the restricted pages, you will need to create a user account.  
A test user account has already been created with the following credentials:  
  
Email: `test@mail.com`  
Password: `12345678`  
