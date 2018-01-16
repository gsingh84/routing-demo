<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

//Require the autoload file
require_once('vendor/autoload.php');

//Create an instance of the base class
$f3 = Base::instance();

//Set debug level
$f3->set('DEBUG', 3);

//Define a default route
$f3->route('GET /', function() {
    echo "<h1>Routing Demo</h1>";
});

//Define a route for page 1
$f3->route('GET /page1', function() {
    echo "<h1>This is page 1</h1>";
});

//Define a route for page 1 subpage-a
$f3->route('GET /page1/subpage-a', function() {
    echo "<h1>This is page 1, Subpage A</h1>";
});

//Define a route for jewelry subpage-b
$f3->route('GET /jewelry/rings/toe-rings', function() {
//    echo "<h1>Toe-Rings</h1>";
    $template = new Template();
    echo $template->render('views/home.html');
});

//Run fat free
$f3->run();