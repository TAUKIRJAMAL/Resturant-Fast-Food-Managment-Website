<!DOCTYPE HTML>
<html lang="en-US">
	<head>
		<meta charset="UTF-8">
		<title> HUNGRY BIRD  </title>
  
  <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />		


		<link rel="stylesheet" href="style.css" />

		
	</head>
	<body>
		<div id="wrapper">
			<header>
				<div id="header">
					<h2>HUNGRY BIRD </h2>
					<p>HEALTHY FOOD..
					TASTE GOOD</p>
				</div>
			</header>
			<nav>
				<div id="nav">
					<ul>
				<li><a href="http://localhost/91/indexs.php">Classic Chinese Chow Mein with authentic ingredients</a></li>
						<li><a href="#"></a></li>
						<li><a href="#"></a></li>
						
					</ul>
				</div>
			</nav>
			<section>
				<div id="slider_wrapper">

					<div class="slider-wrapper theme-dark">
						<div id="slider" class="nivoSlider">
							<img src="img/19.jpg" />
							<img src="img/18.jpg" />
							<img src="img/14.jpg" />
							<img src="img/3.jpg" />
						</div> 
					</div>
				</div>				
				
				
		</section>
			<div id="content_wrapper">
				<div id="content">
					<article>
						<h2>ITEMS ARE</h2>
						<p>Chicken chowmein(350taka ) </p>
						<p>Beef Chowmein (400taka ) </p>
						<p>Special Chowmein(250taka ) </p>
						<p>Vagetable Chowmein(250taka ) </p>
						<p>American Chopsuey  (210taka ) </p>
						<p>Beef Chopsuey  (250taka ) </p>
					</article>
				</div>
				<div id="sidebar">
					
				</div>
			</div>
			
	<p>		
			
		</p>	
<?php
include "db.php";
if (isset($_POST['done']))
{
$dishename= $_POST['dishename'];
$quantity = $_POST['quantity'];
$placeortable = $_POST['placeortable'];
$ordertime= $_POST['ordertime'];
$yourBkash= $_POST['yourBkash'];



$insert = mysql_query("INSERT INTO `pt_table`(`dishname`, `quantity`, `placeortable`, `ordertime`,`yourBkash`)
VALUES ('$dishename','$quantity','$placeortable','$ordertime','$yourBkash')");
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
<input type="text" name="yourBkash" placeholder="yourBkash">
<input type="submit" name="done">
</form>
<a href="record.php">records</a>	
		<p>
</p>		
			
			
			
			<footer>
				<div id="footer">
					<p>
					
					HUNGRY BIRD 
					
					</p>
				</div>
			</footer>
		</div>
		
    <script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
	
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
    </script>	
	
	</body>
</html>