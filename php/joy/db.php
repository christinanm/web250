 <?php

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