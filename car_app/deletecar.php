<html>
<head>
<title>Capricious Mongoose's Used Cars ✧ Delete Car</title>
</head>

<body>

<h1>Capricious Mongoose's Used Cars</h1>
<h4><a href="index.php">Go Back</a></h4>
<?php 
include 'config_db.php';
$vin = $_GET['VIN'];
$query = "DELETE FROM INVENTORY WHERE VIN='$vin'";
echo "$query <BR>";
/* Try to query the database */
if ($result = $mysqli->query($query)) {
    echo "Successfully connected to the Cars database.";
    echo "The vehicle with VIN $vin has been deleted.";
}
else
{
    echo "Sorry, a vehicle with VIN of $vin cannot be found " . mysql_error()."<br>";
}

$mysqli->close();
   
?>

</body>

</html>
