<?php
include "db.php";
?>
<table border="3">
<tr>
<th>serial</th>
<th>dishname</th>
<th>quantity</th>
<th>placetable</th>
<th>ordertime</th>
<th>yourBkash</th>

<th>del</th>


</tr>

<?php
$record = mysql_query("SELECT * FROM `pt_table`");
while($data = mysql_fetch_array($record))
{
	?>
	<tr>
	
	<td><?php echo $data['serial'];?></td>
	<td><?php echo $data['dishname'];?></td>
	<td><?php echo $data['quantity'];?></td>
	<td><?php echo $data['placeortable'];?></td>
	<td><?php echo $data['ordertime'];?></td>
	<td><?php echo $data['yourBkash'];?></td>
	
	<td><a href="del.php?serial=<?php echo $data['serial'];?>">del</a></td>
	<tr>
	<?php
}
?>



</table>
<a href="http://localhost/91/a.php">Back to HOME</a>
