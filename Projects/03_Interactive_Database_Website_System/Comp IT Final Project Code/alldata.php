<!doctype html>
<?php
require_once("connection.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>


<body>
ตารางแสดงค่าเฉลี่ยข้อมูลการใช้งานโทรศัพท์รายเดือน
	<table width="200" border="1">
  <tbody>
    <tr>
	  <td>phone_no</td>
	  <td>name</td>
	  <td>voicemail_message</td>
      <td>day_mins</td>
	  <td>day_calls</td>
      <td>day_charge</td>
	  <td>evening_mins</td>
      <td>evening_calls</td>
	  <td>evening_charge</td>
      <td>night_mins</td>
	  <td>night_calls</td>
      <td>night_charge</td>
	  <td>international_mins</td>
	  <td>international_calls</td>
	  <td>international_charge</td>
      <td>customer_service_calls</td>
      <td>detail</td>
    <tr>
		<?php	
	$sql="	SELECT c.customer_phone_no AS customer_phone_no, 
			ci.customer_name AS customer_name ,
			avg(c.customer_vmail_message) AS customer_vmail_message, 
			avg(c.customer_day_mins) AS customer_day_mins, 
			avg(c.customer_day_calls) AS customer_day_calls, 
			avg(c.customer_day_charge) AS customer_day_charge, 
			avg(c.customer_eve_mins) AS customer_eve_mins, 
			avg(c.customer_eve_calls) AS customer_eve_calls, 
			avg(c.customer_eve_charge) AS customer_eve_charge, 
			avg(c.customer_night_mins) AS customer_night_mins, 
			avg(c.customer_night_calls) AS customer_night_calls, 
			avg(c.customer_night_charge) AS customer_night_charge, 
			avg(c.customer_intl_mins) AS customer_intl_mins, 
			avg(c.customer_intl_calls) AS customer_intl_calls,
			avg(c.customer_intl_charge) AS customer_intl_charge, 
			avg(c.customer_custserv_calls)  AS customer_custserv_calls  
			FROM customer c, customer_info ci 
			WHERE c.customer_phone_no = ci.customer_phone_no
			GROUP BY c.customer_phone_no	";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
	$customer_phone_no=$list["customer_phone_no"];
	$customer_name=$list["customer_name"];
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
			
	echo "<td>  $customer_phone_no </td>";	
	echo "<td>  $customer_name </td>";	
	echo "<td>  $customer_vmail_message </td>";
	echo "<td>  $customer_day_mins </td>";
	echo "<td>  $customer_day_calls </td>";
	echo "<td>  $customer_day_charge </td>";
	echo "<td>  $customer_eve_mins </td>";
	echo "<td>  $customer_eve_calls </td>";
	echo "<td>  $customer_eve_charge </td>";
	echo "<td>  $customer_night_mins </td>";
	echo "<td>  $customer_night_calls </td>";
	echo "<td>  $customer_night_charge </td>";
	echo "<td>  $customer_intl_mins </td>";
	echo "<td>  $customer_intl_calls </td>";
	echo "<td>  $customer_intl_charge </td>";
	echo "<td>  $customer_custserv_calls </td>";
    echo "<td><a href = 'add_or_edit_customer2.php?customer_phone_no=$customer_phone_no'>more detail</a></td>";	
    echo "</tr>";
	}  
?>  
  </tbody>
</table>
					
<br><a href = index.html>back</a>	
	
</body>
</html>