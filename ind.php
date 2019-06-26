<?php
include "db.php";
if (isset($_POST['done']))
{
$dishename= $_POST['dishename'];
$quantity = $_POST['quantity'];
$placeortable = $_POST['placeortable'];
$odertime= $_POST['odertime'];




$insert = mysql_query("INSERT INTO `p_table`(`dishname`, `quantity`, `placeortable`, `ordertime`)
VALUES ('$dishename','$quantity','$placeortable','$odertime')");
if(!$insert)
{
	echo mysql_error();
}
else
{
	echo "inserted";
}
}
?>
<form method ="POST">
<input type="text" name="dishename" placeholder="dishename">
<input type="text" name="quantity" placeholder="quantity">
<input type="text" name="placeortable" placeholder="placeortable">
<input type="text" name="ordertime" placeholder="ordertime">
<input type="submit" name="done">
</form>
<a href="record.php">records</a>