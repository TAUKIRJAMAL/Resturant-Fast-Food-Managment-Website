<?php
mysql_connect ("localhost","root","1234");
$db = mysql_select_db("ssst_project");
if(!$db)
{
	echo "not connected";
}
else
{
	echo "connected";
}
?>