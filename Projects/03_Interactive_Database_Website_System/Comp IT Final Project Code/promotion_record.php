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
	<form action="add_result.php" method="get">
	<p>		
	Customer Phone No: <input type="text" name="customer_phone_no" required><br>		
	Promotion ID: 
	<select name="promotion_id"> 		
    	<?php
			$sql="SELECT * FROM promotion";
			$result=mysqli_query($db,$sql);
			while ($list=mysqli_fetch_array($result)) 
			{
			$promotion_id=$list["promotion_id"];
			$promotion_name=$list["promotion_name"];
			echo"<option value='$promotion_id'> $promotion_id : $promotion_name</option>";
			}
		?>
 	</select><br>			
	Staff ID: 
		<select name="staff_id"> 		
    	<?php
			$sql="SELECT * FROM staff";
			$result=mysqli_query($db,$sql);
			while ($list=mysqli_fetch_array($result)) 
			{
			$staff_id=$list["staff_id"];
			$staff_name=$list["staff_name"];
			echo"<option value='$staff_id'> $staff_id : $staff_name</option>";
			}
		?>
 	</select><br>
	Time Offer: 
	<select name="time_offer"> 		
    	<option value='08.00-10.00'> 08.00-10.00 </option>
		<option value='10.00-12.00'> 10.00-12.00 </option>
		<option value='12.00-14.00'> 12.00-14.00 </option>
		<option value='14.00-16.00'> 14.00-16.00 </option>
 	</select><br>	
	Result: 
		<input type="radio" name="success" value="1" required >Success
		<input type="radio" name="success" value="0" >Unsuccess 
		
			
			
		 	<br><input type="submit">
    	</p>
	</form>
	<br><a href = index.html>back</a>
</body>
</html>