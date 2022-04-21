<?php
$bID= $_GET['bID'];
echo $sID;
$conn= mysqli_connect("localhost", "root", "", "boar");
$query="delete from buy where bID= $bID";
$result= mysqli_query($conn, $query);
if("$result")
{
	header("location: buysrec.php");
}
?>