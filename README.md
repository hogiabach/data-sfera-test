# Data Sfera Test 
## Getting Started

I don't know how to use doker. I couldn't learn doker in a short time so here's a tutorial on how to get my code running.

### Installation
1. First, clone the code to your device
```
 git clone https://github.com/hogiabach/data-sfera-test.git
```
2. Install packages
```
composer update
composer install
```
3. Create .env that depends on .env.example and add your database's keys & amoCRM's keys


```
DB_CONNECTION=
DB_HOST=
DB_PORT=
DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=
```
```
AMOCRM_CLIENT_ID=
AMOCRM_CLIENT_SECRET=
AMOCRM_CLIENT_REDIRECT_URI=
AMOCRM_BASE_DOMAIN=
AMOCRM_CODE_AUTHORIZATION=
``` 

### Usage
1. First create Leads table in the database
```
php artisan migrate
```

2. Run server
```
php artisan serve
```
3. The values in leads from amoCRM API will be created or added to the Database after you access the /leads router

```
http://127.0.0.1:{your port}/leads
```
4. If when accessing the router /leads you see the message "Authorization code has been revoked", recreate a new authorization code (Код автортзаций) and change the value of variable ``AMOCRM_CODE_AUTHORIZATION`` in .env

```
AMOCRM_CODE_AUTHORIZATION=
```

Thank you for reading my CV and giving me the test.
