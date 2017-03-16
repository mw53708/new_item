<?php

$mysqli = new mysqli("localhost", "root", "", "test");

if($mysqli === false) {
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}

/*$department = $upc = $description = $brand = $size = $cost = $retail = $supplier  = $supplier_ID = $p6 = $local = $organic = "";*/

$department = $mysqli->real_escape_string($_REQUEST['department']);
$upc = $mysqli->real_escape_string($_REQUEST['upc']);
$description = $mysqli->real_escape_string($_REQUEST['description']);
$brand = $mysqli->strtoupper(real_escape_string($_REQUEST['brand']));
$size = $mysqli->real_escape_string($_REQUEST['size']);
$cost = $mysqli->real_escape_string($_REQUEST['cost']);
$retail = $mysqli->real_escape_string($_REQUEST['retail']);
$supplier = $mysqli->real_escape_string($_REQUEST['supplier']);
$supplier_ID = $mysqli->real_escape_string($_REQUEST['supplier_ID']);
$p6 = $mysqli->real_escape_string($_REQUEST['P6']);
$local = $mysqli->real_escape_string($_REQUEST['local']);
$organic = $mysqli->real_escape_string($_REQUEST['organic']);
$notes = $mysqli->real_escape_string($_REQUEST['notes']);



$sql = "INSERT INTO new_item (Department, Item_ID, Item_Description, Brand, Size, Cost, Retail, Supplier, Supplier_ID, P6, Local, Organic, Notes) 
		VALUES ('$department', '$upc', '$description', '$brand', '$size', '$cost', '$retail', '$supplier', '$supplier_ID', '$p6', '$local', '$organic', '$notes')";

if($mysqli->query($sql) === false) 
{
	echo "ERROR: could not execute sql. " . $mysqli->error;
} else {
	header('Location: index.php');
}

$mysqli->close();

?>
