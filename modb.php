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

<?php
error_reporting(0); 
$bID= $_GET['bID'];
$date=date("D,d-M-Y");
$time=date("h:i:s");
//echo "ID is ". $sID;
$conn= mysqli_connect("localhost", "root", "", "boar");
$query="select * from buy where bID= $bID";
$result= mysqli_query($conn, $query);
while($row= mysqli_fetch_array($result))
{
		$bID= $row['bID'];
		$date= $row['date'];
		$time= $row['time'];
		$usd= $row['usd'];
		$euro=$row['euro'];
		$gbp= $row['gbp'];
		$chf= $row['chf'];
		$cad= $row['cad'];
		$jpy= $row['jpy'];
		$zar= $row['zar'];
		$kes= $row['kes'];
		$ugx= $row['ugx'];
		$tzs= $row['tzs'];
		$action= $row['action'];
}			
?>
 <form class="modal-content animate" action="modbuys.php" method="POST">
    <div class="imgcontainer">
     <!-- <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>-->
      <img src="logo.png" alt="Bank Logo" class="avatar1">
    </div>

    <div class="container">
	<h2>Modify Buys Exchange Rate In this Currency Form</h2>
	
         <p style="background-color:#f1f1ff; width: auto;
			padding: 10px 18px;">Choose Action Please | >>| >>| >> <font style="float:right;">
		 <!--<input type="radio" value="Buying"  required="required" name="action" checked> Buying-->
		<input type="radio" value="<?php// echo $action; ?>"  name="action" checked > Buying
         <!--<input type="radio" value="<?php echo $action; ?>"   name="action" checked >Selling-->
		 </font>
		 </p>  
	<hr / color="green">
		<table border="0">	

		<input type ="hidden" name="bID" readonly value="<?php echo $bID; ?>">
		<input  type="hidden" name="date"  value="<?php echo $date ?>">
		<input  type="hidden" name="time"  value="<?php echo $time; ?>">
		<tr><td>
				<label for="usd"><b>USD</b></label>
					<input type="text" value="<?php echo $usd; ?>" size="10"  name="usd" >
			</td>	
			<td>
				<label for="euro"><b>EURO</b></label>
					<input type="text" size="10" value="<?php echo $euro; ?>" name="euro" >
			</td>
			<td>
	  
				 <label for="gbp"><b>GBP</b></label>
					<input type="text" size="10" value="<?php echo $gbp; ?>" name="gbp" >
			</td></tr>

			<tr><td>
				<label for="chf"><b>CHF</b></label>
					<input type="text" value="<?php echo $chf; ?>" size="10"  name="chf" >
			</td>	
			<td>
				<label for="cad"><b>CAD</b></label>
					<input type="text" value="<?php echo $cad; ?>" name="cad" >
			</td>
			<td>
	  
				 <label for="jpy"><b>JPY</b></label>
					<input type="text" value="<?php echo $jpy; ?>" name="jpy" >
			</td></tr>
			
			<tr><td>
				<label for="zar"><b>ZAR</b></label>
					<input type="text" size="10" value="<?php echo $zar; ?>" name="zar" >
			</td>	
			<td>
				<label for="kes"><b>KES</b></label>
					<input type="text" value="<?php echo $kes; ?>" name="kes" >
			</td>
			<td>
	  
				 <label for="ugx"><b>UGX</b></label>
					<input type="text" value="<?php echo $ugx; ?>" name="ugx" >
			</td></tr>
			<tr><td>
				<label for="tzs"><b>TZS</b></label>
					<input type="text" value="<?php echo $tzs; ?>" name="tzs" >
				</td><td colspan="2">

			<div class="container" style="background-color:#f1f1ff;">
				<button type="submit" name="modsbtn">Modify Now</button>
				
				<a href='action_admin.php'><button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Close</button></a>
				<button type="reset" class="clrbtn">Clear Data</button>
				</td>
				</div>
				</tr>
				
				<?php "</table>"; ?>
		
	</div>

   <!-- <div class="container" style="background-color:#f1f1ff">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>-->
</form>
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
<?php
//include("modsells.php");
 ?>
</body>
</html>

