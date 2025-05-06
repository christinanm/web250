<html>
<head>
<title>Sam's Used Cars</title>
</head>

<body>

<h1>Sam's Used Cars</h1>
<?php 
include 'dbconfig.php';
$vin = $_GET['VIN'];
$query = "DELETE FROM inventory WHERE VIN='$vin'"; // lowercased inventory
echo "$query <br>";

/* Try to query the database */
if ($result = $mysqli->query($query)) {
   echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . $mysqli->error . "<br>"; // fixed error reporting
}

$mysqli->close();
?>
</body>
</html>
