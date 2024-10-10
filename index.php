<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
define('__ROOT__', "http://localhost/credito_posible");
// define('__ROOT__', "http://localhost/proyectos/credito_posible");

Flight::route('/inicio', function () {
    Flight::redirect('/');
});

Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/nosotros', function () {
    Flight::render('about.php', array('title' => 'Acerca de nosotros'));
});

Flight::route('/productos', function () {
    Flight::render('productos.php', array('title' => 'Productos hipotecarios'));
});

Flight::route('/faq', function () {
    Flight::render('faq.php', array('title' => 'FAQs'));
});

Flight::route('/solicitud', function () {
    Flight::render('solicitud.php', array('title' => 'Solicitud de crédito'));
});

Flight::route('/contacto', function () {
    Flight::render('contact.php', array('title' => 'Contacto'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
