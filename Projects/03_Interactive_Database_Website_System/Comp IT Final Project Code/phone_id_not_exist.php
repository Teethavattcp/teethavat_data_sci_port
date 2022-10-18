<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>	
<?php
	$customer_phone_no=$_GET['customer_phone_no'];
	echo "<script type='text/javascript'> alert('Phone no : $customer_phone_no is not exist.') </script>";
	?>
	<a href	= "phone_id.php">Please Try Again</a> 
</body>
</html>