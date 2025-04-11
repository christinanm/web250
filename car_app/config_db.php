<?php

/*

if ($_SERVER['HTTP_HOST'] === 'localhost') {

//code for localhost 

echo n12br ("This is localhost")
$dbuser = 'root';
$dbpass = '';
$dbhost = 'localhost'

} else {
 
//code for Infinityfree

echo n12br ("This is not localhost")
$dbuser = '';
$dbpass = '';
$dbhost = 'localhost'

}

*/




$local = true;
if ($local == true) {
    $dbuser = 'root';
    $dbpass = '';
    $dbhost = 'localhost';
}

$mysqli = mysqli_connect($dbhost, $dbuser, $dbpass);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

//select a database to work with
$mysqli->select_db("Cars");
 
?>