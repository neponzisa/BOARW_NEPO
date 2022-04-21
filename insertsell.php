<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
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
		// servername => localhost
		// username => root
		// password => empty
		// database name => staff
		$conn = mysqli_connect("localhost", "root", "", "boar");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		

		
			// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO sell VALUES ('','$date','$time','$usd',
		'$euro','$gbp','$chf','$cad','$jpy','$zar','$kes','$ugx','$tzs','$action')";
		
				mysqli_query($conn, $sql) or die(mysqli_error($conn));
				/*
				if(mysqli_query($conn, $sql))
				{
					echo "<h3>data stored in a database successfully."
						. " Please browse your localhost php my admin"
						. " to view the updated data</h3>";

					echo nl2br("\n $date\n "
						. "$time\n $usd\n $euro"
						. "$gbp\n $chf\n $cad"
						. "$jpy\n $zar\n $kes"
						. "$kes\n $ugx\n $tzs\n $action ");
				
				}
				
						
		 else
		{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		*/
		// Close connection
		mysqli_close($conn);
		
		?>
	</center>
</body>

</html>
