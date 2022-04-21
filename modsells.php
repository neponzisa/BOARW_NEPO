<html>
    <head>
        <title>Updating</title>
        <style type="text/css">
script{
    border-color:blue, background-color:grey;
}
        </style>
</head>
<body>
<?php
$modID= $_REQUEST['sID'];
//echo"<h1>Hello, Boa it's Nepo, <br />This is to update and your ID is $modID</h1>";

//$sID= $row['sID'];

        $sdate=date("D,d-M-Y");
        $stime=date("h:i:s");       
		$usd= $_POST['usd'];
		$euro=$_POST['euro'];
		$gbp= $_POST['gbp'];
		$chf= $_POST['chf'];
		$cad= $_POST['cad'];
		$jpy= $_POST['jpy'];
		$zar= $_POST['zar'];
		$kes= $_POST['kes'];
		$ugx= $_POST['ugx'];
		$tzs= $_POST['tzs'];
		//$action= $_POST['action'];
    $conn= mysqli_connect("localhost", "root", "", "boar");
    $sql="update sell set usd='$usd', euro='$euro',gbp='$gbp',chf='$chf'
    ,cad='$cad',jpy='$jpy',zar='$zar',kes='$kes',ugx='$ugx',tzs='$tzs'
    ,sdate='$sdate',stime='$stime'
    where sID=$modID ";
    $supdate= mysqli_query($conn, $sql);
    if($supdate)
    {?>

<script style="margin-top:20em;">
    alert("Data has been updated successfuly!")
    </script>
    <?php 
    include"sellsrec.php";
    }
    else
    {
    ?>
    <script>
    alert("Data not updated!")
    </script>
    <?php

    }



?>
</body>
</html>