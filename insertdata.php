<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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
	<center>
		<?php

					
				//$bID= $_POST['bID'];
				$date= $_POST['date'];
				$time= $_POST['time'];
				$usd = $_POST['usd'];
				$euro = $_POST['euro'];
				$gbp = $_POST['gbp'];
				$chf = $_POST['chf'];
				$cad = $_POST['cad'];		
				$jpy = $_POST['jpy'];
				$zar = $_POST['zar'];
				$kes = $_POST['kes'];
				$ugx = $_POST['ugx'];		
				$tzs = $_POST['tzs'];
				$action= $_POST['action'];
				$date1= date("D,d-M-Y"); $time1=date("H:i:s");
		//echo "Action is $action and date is $date and time is $time";
		if($action == 'Selling')
		{
			include("insertsell.php");
			echo"<div class='container'>";
				echo "<center><br /><font color='black' size='5px'>Sells rate is saved successfuly on $date1 at $time1 </center></font>";
				echo"<a href='sellsrec.php'><button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>View data</button></a>";
				//echo"<a href='action_admin.php'><button type="button" onclick="document.getElementById('id01').style.display='none''' class='cancelbtn'>Close</button></a>";
				print "<a href='setcurrencyform.php'><button type='button'>Add New</button></a></div>";
				//echo "<h1>".date("r")."</h1>";
				//echo "<h1>".date("D,d-M-Y")." at ".date("H:i:s")."</h1>";
		}
		else
		{
			include("insertbuy.php");
			echo"<div class='container'>";
			echo "<center><br /><font color='black' size='5px'>Buys rate! is saved successfuly on $date1 at $time1 </center></font>";
				
				print "<a href='setcurrencyform.php'><button type='button'>Add New</button></a>";
			echo"</div>";
		}
		?>
	
</body>

</html>