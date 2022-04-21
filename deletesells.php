<?php
$sID= $_GET['sID'];
echo $sID;
$conn= mysqli_connect("localhost", "root", "", "boar");
$query="delete from sell where sID= $sID";
$result= mysqli_query($conn, $query);
if("$result")
{
	header("location: sellsrec.php");
}
?>