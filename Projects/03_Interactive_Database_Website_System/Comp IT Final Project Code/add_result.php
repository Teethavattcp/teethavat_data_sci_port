<?php
require_once("connection.php");
    $customer_phone_no=$_GET['customer_phone_no'];
    $promotion_id=$_GET['promotion_id'];
    $staff_id=$_GET['staff_id'];
    $time_offer=$_GET['time_offer'];
    $success=$_GET['success'];
   


$sql="SELECT customer_phone_no
	FROM customer 
	WHERE customer_phone_no='$customer_phone_no'";
	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);

if (!isset($list)) 
	{
	header("Location: phone_id_not_exist2.php?customer_phone_no=$customer_phone_no");
	}

else {
 $sql="INSERT INTO promotion_customer() VALUES('','$customer_phone_no','$promotion_id','$staff_id','$time_offer',$success)";
 	$result=mysqli_query($db,$sql);	
	header('Location: record_success.html');
}


?>