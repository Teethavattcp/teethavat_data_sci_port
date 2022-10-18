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
<p>
  <?php	
	$promotion_id=$_GET['promotion_id'];
	$sql="SELECT promotion_name
	FROM promotion
	WHERE promotion_id = '$promotion_id'";
	$result=mysqli_query($db,$sql);	
	$list=mysqli_fetch_array($result);
	$promotion_name=$list["promotion_name"];
	echo "รายชื่อลูกค้าที่เหมาะกับโปรโมชั่น $promotion_id : $promotion_name";
	?>
	<table width='200' border='1'>
  		<tbody>
    		<tr>
				<td>phone_no</td>
				<td>name</td>    
				<tr>
<?php		
	if ($promotion_id=="B001")
	{
		$sql="SELECT c.customer_phone_no AS customer_phone_no, 
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
			FROM promotion AS p,customer AS c, customer_info AS ci
			WHERE c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id = '$promotion_id'
			AND c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id != ci.customer_current_promotion_id	 
			AND customer_day_charge+customer_eve_charge >= 299
			AND customer_day_charge+customer_eve_charge+customer_night_charge < 499
			GROUP BY c.customer_phone_no";
			$result=mysqli_query($db,$sql);	
	}					
	elseif($promotion_id=="C001")
	{
		$sql="SELECT c.customer_phone_no AS customer_phone_no, 
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
			FROM promotion AS p,customer AS c, customer_info AS ci
			WHERE c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id = '$promotion_id'
			AND c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id != ci.customer_current_promotion_id	 
			AND customer_night_charge >= 299
			AND customer_day_charge+customer_eve_charge+customer_night_charge < 499
			GROUP BY c.customer_phone_no";
		$result=mysqli_query($db,$sql);	
	}
	//-------------------------------------------------------------------------------------------				
	elseif($promotion_id=="D001")
	{
		$sql="SELECT c.customer_phone_no AS customer_phone_no, 
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
			FROM promotion AS p,customer AS c, customer_info AS ci
			WHERE c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id = '$promotion_id'
			AND c.customer_phone_no = ci.customer_phone_no
			AND p.promotion_id != ci.customer_current_promotion_id	 
			AND customer_day_charge+customer_eve_charge+customer_night_charge >= 499
			GROUP BY c.customer_phone_no";
			$result=mysqli_query($db,$sql);	
		
	}
					
		while ($list=mysqli_fetch_array($result))
		{
			$customer_phone_no=$list["customer_phone_no"];
			$customer_name=$list["customer_name"];
			
			echo "<td>  $customer_phone_no </td>";	
			echo "<td>  $customer_name </td>";	
			echo "</tr>";
		}
			echo "</tbody>";
			echo "</table>";
			echo "<br><a href = promotion.php>back</a>";
			echo "<br><a href = index.html>back home</a>";
?>
  
</body>
</html>