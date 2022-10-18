<?php
require_once("connection.php");
	$customer_phone_no=$_GET["customer_phone_no"];
	$customer_month_year=$_GET["customer_month_year"];
   	$customer_vmail_message=$_GET["customer_vmail_message"];
	$customer_day_mins=$_GET["customer_day_mins"];
	$customer_day_calls=$_GET["customer_day_calls"];
	$customer_day_charge=$_GET["customer_day_charge"];
	$customer_eve_mins=$_GET["customer_eve_mins"];
	$customer_eve_calls=$_GET["customer_eve_calls"];
	$customer_eve_charge=$_GET["customer_eve_charge"];
	$customer_night_mins=$_GET["customer_night_mins"];
	$customer_night_calls=$_GET["customer_night_calls"];
	$customer_night_charge=$_GET["customer_night_charge"];
	$customer_intl_mins=$_GET["customer_intl_mins"];
	$customer_intl_calls=$_GET["customer_intl_calls"];
	$customer_intl_charge=$_GET["customer_intl_charge"];
	$customer_custserv_calls=$_GET["customer_custserv_calls"];
		
    
	$sql=" UPDATE customer SET 
	customer_vmail_message = $customer_vmail_message,
	customer_day_mins = $customer_day_mins,
	customer_day_calls = $customer_day_calls,
	customer_day_charge = $customer_day_charge,
	customer_eve_mins = $customer_eve_mins,
	customer_eve_calls = $customer_eve_calls,
	customer_eve_charge = $customer_eve_charge,
	customer_night_mins = $customer_night_mins,
	customer_night_calls = $customer_night_calls,
	customer_night_charge = $customer_night_charge,
	customer_intl_mins = $customer_intl_mins,
	customer_intl_calls = $customer_intl_calls,
	customer_intl_charge = $customer_intl_charge,
	customer_custserv_calls = $customer_custserv_calls
	WHERE customer_phone_no= '$customer_phone_no' 
	AND customer_month_year= '$customer_month_year'";
    $result=mysqli_query($db,$sql);
	header("Location: add_or_edit_customer2.php?customer_phone_no=$customer_phone_no")
?>