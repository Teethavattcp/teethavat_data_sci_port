<!doctype html>
<?php
	require_once("connection.php");

	$customer_phone_no=$_GET['customer_phone_no'];
	$customer_month_year=$_GET['customer_month_year'];

	$sql="SELECT * FROM customer WHERE customer_phone_no='$customer_phone_no' AND customer_month_year='$customer_month_year'";

	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);


	$customer_vmail_message=$list["customer_vmail_message"];
	$customer_day_mins=$list["customer_day_mins"];
	$customer_day_calls=$list["customer_day_calls"];
	$customer_day_charge=$list["customer_day_charge"];
	$customer_eve_mins=$list["customer_eve_mins"];
	$customer_eve_calls=$list["customer_eve_calls"];
	$customer_eve_charge=$list["customer_eve_charge"];
	$customer_night_mins=$list["customer_night_mins"];
	$customer_night_calls=$list["customer_night_calls"];
	$customer_night_charge=$list["customer_night_charge"];
	$customer_intl_mins=$list["customer_intl_mins"];
	$customer_intl_calls=$list["customer_intl_calls"];
	$customer_intl_charge=$list["customer_intl_charge"];
	$customer_custserv_calls=$list["customer_custserv_calls"];
	
		
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form action="update_customer2.php" method="get">
		<p>
			Phone number of customer (Phone No): <input type="text" name="customer_phone_no" readonly value=<?php echo $customer_phone_no;?> ><br>
			Bill cycle (MM/YYYY): <input type="text" name="customer_month_year" readonly value=<?php echo $customer_month_year;?>  ><br>
			Number of voice mail messages (Vmail Message): <input type="text" name="customer_vmail_message" required value=<?php echo $customer_vmail_message;?> ><br>
			Total day minutes used (Day Mins): <input type="text" name="customer_day_mins" required value=<?php echo $customer_day_mins;?>><br>
			Total day calls made (Day Calls): <input type="text" name="customer_day_calls" required value=<?php echo $customer_day_calls;?>><br>
			Total day charge (Day Charge): <input type="text" name="customer_day_charge" required value=<?php echo $customer_day_charge;?>><br>
			Total evening minutes used (Eve Mins): <input type="text" name="customer_eve_mins" required value=<?php echo $customer_eve_mins;?>><br>
			Total evening calls made (Eve Calls): <input type="text" name="customer_eve_calls" required value=<?php echo $customer_eve_calls;?>><br>
			Total evening charge (Eve Charge): <input type="text" name="customer_eve_charge" required value=<?php echo $customer_eve_charge;?>><br>
			Total night minutes used (Night Mins): <input type="text" name="customer_night_mins" required value=<?php echo $customer_night_mins;?>><br>
			Total night calls made (Night Calls): <input type="text" name="customer_night_calls" required value=<?php echo $customer_night_calls;?>><br>
			Total night charge (Night Charge): <input type="text" name="customer_night_charge" required value=<?php echo $customer_night_charge;?>><br>
			Total International minutes used (Intl Mins): <input type="text" name="customer_intl_mins" required value=<?php echo $customer_intl_mins;?>><br>
			Total International calls made (Intl Calls): <input type="text" name="customer_intl_calls" required value=<?php echo $customer_intl_calls;?>><br>
			Total International charge (Intl Charge): <input type="text" name="customer_intl_charge" required value=<?php echo $customer_intl_charge;?>><br>
			Number of customer service calls made (CustServ Calls): <input type="text" name="customer_custserv_calls" required value=<?php echo $customer_custserv_calls;?>><br><br>
		 	<input type="submit" value="save">
    	</p>
	</form>
</body>
	
<br><a href = add_or_edit_customer2.php?customer_phone_no=<?php echo "$customer_phone_no";?>>back</a>
</html>
