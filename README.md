# Project
This is a docker compose project that spins up a development environment with specific tailer made services.
Simply navigate into the app directory, build your project and serve your project from the public directory. 

## Setup
To get started, rename the .env.example to .env 
* `mv .env-example .env` 
* `docker-compose up -d`

* Run the queue worker for Laravel
* `docker exec -it app bash`
* `php artisan queue:work`

IMPORTANT! App uses node v16 and up
* 
## Services
#### This is for development navigation and can only be run once docker is up
* Nginx server pointing to the [public directory](http://0.0.0.0:8000)
* MySql Manager in the form of [PHPMyAdmin](http://0.0.0.0:8081)
* Cache Manager in the form of [Redis Commander](http://0.0.0.0:8082)
* Queue Manager in the form of [RabbitMQ](http://0.0.0.0:8083)
* Mail Manager in the form of [MailHog](http://0.0.0.0:8084)

### Tips!
* RabbitMq might prompt you to login via the dialog box, cancel this and login via the interface
