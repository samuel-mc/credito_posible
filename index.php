<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/credito_posible");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/nosotros', function () {
    Flight::render('about.php', array('title' => 'Acerca de nosotros'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
