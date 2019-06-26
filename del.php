<?php
include "db.php";
$serial = $_GET['serial'];

$del = mysql_query("DELETE FROM `pt_table`WHERE serial= '$serial'");

header("location:record.php");

?>