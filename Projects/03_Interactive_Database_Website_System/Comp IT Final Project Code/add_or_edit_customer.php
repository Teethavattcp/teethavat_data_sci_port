<!doctype html>
<?php
	require_once("connection.php");

	$customer_phone_no=$_GET['customer_phone_no'];

	$sql="SELECT  ci.customer_name AS customer_name
	FROM customer c,customer_info ci
	WHERE c.customer_phone_no = ci.customer_phone_no
	AND c.customer_phone_no='$customer_phone_no'";
	$result=mysqli_query($db,$sql);
	$list=mysqli_fetch_array($result);
	$customer_name=$list["customer_name"];
	
if (!isset($list)) 
	{
	header("Location: phone_id_not_exist.php?customer_phone_no=$customer_phone_no");
	}	
		
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>	
	
<body>
ข้อมูลของลูกค้าชื่อ <?php echo $customer_name;?> เบอร์โทร <?php echo $customer_phone_no;?> <br>
	ประวัติการบันทึกข้อมูล
	<table width="200" border="1">
  <tbody>
    <tr>
      <td>MM/YYYY</td>
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
      <td>แก้ไขข้อมูล</td>
    <tr>
		<?php
	$sql="SELECT * FROM customer WHERE customer_phone_no='$customer_phone_no'";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result))
	{
	$customer_month_year=$list["customer_month_year"];
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
		
    echo "<td>  $customer_month_year </td>";
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
    echo "<td><a href = 'edit_customer.php?customer_phone_no=$customer_phone_no&customer_month_year=$customer_month_year'>edit</a></td>";	
    echo "</tr>";
	}  
?>  
  </tbody>
</table>

<br><a href = phone_id.php>back</a>
<br><a href = index.html>back home</a>
</body>
</html>
