<?php

$mysqli = new mysqli("localhost", "root", "", "test");

if($mysqli === false) {
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}

/*$department = $upc = $description = $brand = $size = $cost = $retail = $supplier  = $supplier_ID = $p6 = $local = $organic = "";*/

$department = $mysqli->real_escape_string($_POST['department']);
$upc = $mysqli->real_escape_string($_POST['upc']);
$description = $mysqli->real_escape_string($_POST['description']);
$brand = $mysqli->real_escape_string($_POST['brand']);
$size = $mysqli->real_escape_string($_POST['size']);
$cost = $mysqli->real_escape_string($_POST['cost']);
$retail = $mysqli->real_escape_string($_POST['retail']);
$supplier = $mysqli->real_escape_string($_POST['supplier']);
$supplier_ID = $mysqli->real_escape_string($_POST['supplier_ID']);
$p6 = $mysqli->real_escape_string($_POST['P6']);
$local = $mysqli->real_escape_string($_POST['local']);
$organic = $mysqli->real_escape_string($_POST['organic']);
$notes = $mysqli->real_escape_string($_POST['notes']);



$sql = "INSERT INTO new_item (Department, Item_ID, Item_Description, Brand, Size, Cost, Retail, Supplier, Supplier_ID, P6, Local, Organic, Notes) VALUES ('$department', '$upc', '$description', '$brand', '$size', '$cost', '$retail', '$supplier', '$supplier_ID', '$p6', '$local', '$organic', '$notes')";

if($mysqli->query($sql) === false) 
{
	echo "ERROR: could not execute sql. " . $mysqli->error;
} else {
	header('Location: index.php');
}

$mysqli->close();

?>
