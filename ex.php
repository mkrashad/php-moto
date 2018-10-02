<?php

include ("reg/bd.php");

$moto =  mysql_query("SELECT id,name,description,img FROM bikes",$db);

while($myrow = mysql_fetch_array($moto))
{
    echo '<a href="detail.php?id='.$myrow['id'].'"><img src="'.$myrow['img'].'"></a>';
    
}



?>