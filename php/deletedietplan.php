
<?php

include 'connection.php';

$APPID = $_GET['Appid'];
$sql = " DELETE FROM `diatplanappointment` WHERE Appid = $APPID " ;
$query = mysqli_query($conn,$sql);

	
	echo "<script> 
		window.location.href = './displaydietplan.php ';
        </script>";

?>
