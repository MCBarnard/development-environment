# Project
This is a docker compose project that spins up a development environment with specific tailer made services.
Simply navigate into the app directory, build your project and serve your project from the public directory. 

## Setup
To get started, rename the .env.example to .env `mv .env-example .env` and run `docker-compose up -d`

## Services
#### This is for development navigation and can only be run once docker is up
* Nginx server pointing to the [public directory](http://0.0.0.0:8000)
* MySql Manager in the form of [PHPMyAdmin](http://0.0.0.0:8081)
* Cache Manager in the form of [Redis Commander](http://0.0.0.0:8082)
* Queue Manager in the form of [RabbitMQ](http://0.0.0.0:8083)

### Tips!
* RabbitMq might prompt you to login via the dialog box, cancel this and login via the interface
