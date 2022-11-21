<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <hr>
        <a href="http://0.0.0.0/" target="_blank">Home Page</a> &nbsp;
        <a href="http://0.0.0.0:8081/" target="_blank">PHPMyAdmin</a> &nbsp;
        <a href="http://0.0.0.0:8082/" target="_blank">Redis Commander</a> &nbsp;
        <a href="http://0.0.0.0:8083/" target="_blank">RabbitMQ</a> &nbsp;
        <a href="http://0.0.0.0:8084/" target="_blank">MailHog</a> &nbsp;
        <hr>
        <p>
            Setup your db in <a href="http://0.0.0.0:8081/" target="_blank">PHPMyAdmin</a> then write some migrations.
        </p>
        <p>
            By visiting this home page, you have set a key in the
            <a target="_blank" href="http://0.0.0.0:8082">redis commander</a> to prove that the cache works, go
            and have a look.
        </p>
        <p>
            We have also dispatched a welcome mail into the <a target="_blank" href="http://0.0.0.0:8083">rabbitMQ</a>
            queue service.
        </p>
        <p>
            You may view this mail by bashing into the <strong>app container</strong> and running
            <i><strong>php artisan queue:work</strong></i>. This will fire off the mail into your
            <a target="_blank" href="http://0.0.0.0:8084">mail hog</a> inbox
        </p>
    </body>
</html>
