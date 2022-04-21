<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #54AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.clrbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #BEB125;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
}

a{
	text-decoration:none;
}

a:hover
	{
		color:blue; font-weight:bold;
	}

#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 4px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}







img.avatar {
  width: 20%;
  border-radius: 50%;
}
img.avatar1 {
  width: 50%;
  border-radius: 0%;
}

.container {
  padding: 10px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 1% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #f1f1ff;
  width: 50%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>

<!--
<form action="/action_page.php">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label for="psw"><b><br />Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="psw-repeat"><b><br />Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>
    <hr>
    <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
  
  <div class="container signin">
    <p>Already have an account? <a href="#">Sign in</a>.</p>
  </div>
</form>
-->

 <form class="modal-content animate" action="insertdata.php" method="post">
    <div class="imgcontainer">
     <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
      <img src="logo.png" alt="Bank Logo" class="avatar1">
    </div>

    <div class="container">
	
	<?php
		
		
		$conn=mysqli_connect("localhost","root","","boar") or die("Could not connected to database".mysqli_connect_error());
		if($conn === false)
		{
			die("Could not connected to database".mysqli_connect_error());
		}
		$query= "select * from sell";
		$result= mysqli_query($conn, $query);
		if($result)
		{
			$checkdata=mysqli_num_rows($result);
						echo "<div class='container' style='background-color:#f1f1ff;'>";
			//echo"<button type='submit' name='save_data'>Save New Rate</button>";
			echo"<a href='action_admin.php'><button type='button' onclick='document.getElementById('id01').style.display='none'' class='cancelbtn'>Close</button></a>";
			echo"<a href='setsellsform.php'><button type='button' class='clrbtn'>Add Sells</button></a>";
			echo"</div>";
			if($checkdata > 0)
			{
				echo"<h1>Sells Data</h1>";
				echo"<table border='0' id='customers'>";
				echo"<tr>";
					echo "<th>Sells ID</th>";
					echo "<th>Sells Date</th>";
					echo "<th>Sells Time</th>";
					echo "<th>USD</th>";
					echo "<th>EURO</th>";
					echo "<th>GBP</th>";
					echo "<th>CHF</th>";
					echo "<th>CAD</th>";
					echo "<th>JPY</th>";
          echo "<th>ZAR</th>";
					echo "<th>KES</th>";
					echo "<th>UGX</th>";
					echo "<th>TZS</th>";
					echo "<th>ACTION</th>";
					echo "</tr>";
				while($row=mysqli_fetch_array($result))
				{
					
					echo"<tr>";
					echo"<td>". $row['sID']. "</td>";
					echo "<td>". $row['sdate']. "</td>";
					echo "<td>". $row['stime']. "</td>";
					echo "<td>". $row['usd']. "</td>";
					echo "<td>". $row['euro']. "</td>";
					echo "<td>". $row['gbp']. "</td>";
					echo "<td>". $row['chf']. "</td>";
					echo "<td>". $row['cad']. "</td>";
					echo "<td>". $row['jpy']. "</td>";
          echo "<td>". $row['zar']. "</td>";
					echo "<td>". $row['kes']. "</td>";
					echo "<td>". $row['ugx']. "</td>";
					echo "<td>". $row['tzs']. "</td>";
					echo "<td><center><a href='mods.php?sID=". $row['sID'] ."'>Modify</a> | <br />&nbsp;&nbsp;<a href='deletesells.php?sID=". $row['sID'] ."'>Delete this</a></center></td>";
					echo "</tr>";
				}
				echo "</table>";
			}else
			{
				echo"<center>";
				echo "<h2><font color='red'>No record stored for sell's currency!</h2></font>";
				echo "<font color='green'>Please register currency by passing <a href='setsellsform.php'>here</a></font>";
				echo"</center>";
			}

			/* echo'<div class="container" style="background-color:#f1f1ff;">';
			echo'	<button type="submit" name="save_data">Save New Rate</button>';
				
			echo"<a href='action_admin.php'><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button></a>";
			echo'<button type="reset" class="clrbtn">Clear Data</button>';
			echo'</td>';
			echo'</div>'; */
		}else
			echo "Could not to execute $query ". mysqli_error($conn);
		
	?>
		
	</div>

   <!-- <div class="container" style="background-color:#f1f1ff">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
</form>
Yes Its test!
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>