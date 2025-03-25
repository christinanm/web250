<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Capricious Mongoose's Used Cars ✧ Add Car</title>
</head>

<body>
<h1>Capricious Mongoose's Used Cars</h1>
<h2>Add Car</h2>
<h4><a href="index.php">Go Back</a></h4>
<form action="" method="post">
	VIN: <input name="VIN" type="text" /><br />
	<br />
	Make: <input name="Make" type="text" /><br />
	<br />
	Model: <input name="Model" type="text" /><br />
	<br />
	Price: <input name="Asking_Price" type="text" /><br />
	<br />
	<input name="Submit1" type="submit" value="Submit" /><br />
	&nbsp;</form>

	<?php 
// Capture the values posted to this php program from the text fields

// Check whether post request has been made
 if ($_SERVER['REQUEST_METHOD'] == 'POST') {

$VIN =  trim( $_REQUEST['VIN']) ;
$Make = trim( $_REQUEST['Make']) ;
$Model = trim( $_REQUEST['Model']) ;
$Price =  $_REQUEST['Asking_Price'] ;


//Build a SQL Query using the values from above

$query = "INSERT INTO inventory
  (VIN, Make, Model, ASKING_PRICE)
   VALUES (
   '$VIN', 
   '$Make', 
   '$Model',
    $Price
    )";

// Print the query to the browser so you can see it
echo ($query. "<br>");

include 'config_db.php';

  echo 'Connected successfully to mySQL. <BR>'; 
  
//select a database to work with
$mysqli->select_db("Cars");
   Echo ("Selected the Cars database. <br>");

/* Try to insert the new car into the database */
if ($result = $mysqli->query($query)) {
    echo "<p>You have successfully entered $Make $Model into the database.</P>";
}
else
{
    echo "Error entering $VIN into database: " . $mysqli->error."<br>";
}
$mysqli->close();

echo "Post request made.";

 } else {
	echo "Post request not made.";
 }

include_once("../car_app/components/footer.php"); 
?>

</body>

</html>
