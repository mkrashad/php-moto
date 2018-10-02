<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>MotoRent.ru</title>
        <?php include("reg/bd.php");?>
	</head>
	<body>
<?php

$moto=$_POST['moto'];
$pickupdate=$_POST['pickupdate'];
$pickuptime=$_POST['pickuptime'];
$pickuplocation=$_POST['pickuplocation'];

$dropoffdate=$_POST['dropoffdate'];
$dropofftime=$_POST['dropofftime'];
$dropofflocation=$_POST['dropofflocation'];


$helmet=$_POST['helmet'];
$trunk=$_POST['trunk'];
$cl=$_POST['cl'];  
$insurance=$_POST['insurance'];



$sql = "INSERT INTO orders_veiw(moto,pickupdate, pickuptime, pickuplocation, dropoffdate, dropofftime, dropofflocation, helmet, trunk, motorcycleclothing, insurance) VALUES ('$moto','$pickupdate','$pickuptime','$pickuplocation','$dropoffdate','$dropofftime','$dropofflocation','$helmet','$trunk','$cl','$insurance')";

$orders = mysql_query($sql,$db);


if($orders == 'TRUE')   
    
{
      
    echo '<div style="color:black;font-size:17px;">Well Done.Your requst will be check by admin</div>';
}

else{
    
    echo '<div style="color:black;font-size:17px;">Somethnig went wrong we could not process your request.<a href="index.php">Go back and try again</a></div>';
    
}
?>
        
	</body>
</html>