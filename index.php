<?php
    // Turn on error reporting
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Require the autoload file
    // No mater how many packages I use, with the following line I can use that package anywhere
    require_once('vendor/autoload.php');

    // Instantiate the F3 (Fat-Free Framework) Base class
    $f3 = Base::instance(); // Static method would use "::"

    // Define a default route
    $f3 -> route('GET /', function() {
        echo "<h1>Hello World!</h1>";
    });

    // Run fat-free
    $f3 -> run();

