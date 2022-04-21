<html>
<head>
<title>Boar Admin</title>
<style type="text/css">
	.container 
	{
		border: 1px solid gray; padding:20px;
		background-color:#f1f1ff; 
		margin-right:20em; 
		margin-left:20em;
		margin-top:10em;
	}
	a
	{
		text-decoration:none;
	}
/* Set a style for all buttons */
	button
	{
	  background-color: #54AA6D;
	  color: white;
	  padding: 14px 20px;
	  margin: 8px 0;
	  border: none;
	  cursor: pointer;
	  width: 22%;
	  margin-left:20em;
	}
	
	
	
	
</style>
</head>
<body>
<?php 
echo"<div class='container'>";
$msg="<h2>Welcome to Admin Dashboard!</h3>";
$ctime= "select current_timestamp";
echo $msg."<br /><font color='red' size='5px'>No data available to you!</font>";
//echo "<center>".$msg."<br /><font color='red' size='5px'>No data available to you!</center></font>";
//print $ctime;
print "<a href='setcurrencyform.php'><button type='button'>Register currency</button></a>";
echo "<a href='sellsrec.php'><button type='button'>View Sells</button></a></div>";
echo "<a href='buysrec.php'><button type='button'>View Buys</button></a></div>";
echo "<a href='extv.php'><button type='button'>Exchange TV</button></a></div>";
echo"<div>";

//echo "<h1>".date("r")."</h1>";
//echo "<h1>".date("D,d-M-Y")." at ".date("H:i:s")."</h1>";

?>
</html>