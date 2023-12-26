
<?php

include 'payment.php';

$Payid = $_GET['Payid'];
$sql = " DELETE FROM 'payment_details' WHERE Payid = $Payid " ;
$query = mysqli_query($conn,$sql);

	
	echo "<script> 
		window.location.href = './paymentdisplay.php ';
        </script>";

?>
