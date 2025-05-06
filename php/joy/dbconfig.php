<?php

// Automatically detect if we're on localhost
if (in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1'])) {
    // Localhost settings
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'Cars';
} else {
    // Server settings (InfinityFree)
    $dbhost = 'sql308.infinityfree.com';
    $dbuser = 'if0_38612914';
    $dbpass = 'KXnhDVbTRnHGBiy';
    $dbname = 'if0_38612914_Cars';
}

// Connect to database
$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
printf("Connected successfully to mySQL!");

?>
