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
	
	<form action="promotion_list.php" method="get">
		<p>
			List รายชื่อลูกค้าใน Promotion <br>
	<?php
	$sql="SELECT * FROM promotion";
	$result=mysqli_query($db,$sql);
	while ($list=mysqli_fetch_array($result)) 
	{
		
		$promotion_id=$list["promotion_id"];
		$promotion_name=$list["promotion_name"];
		
		echo" <input type='radio' name='promotion_id' value='$promotion_id' checked> $promotion_id : $promotion_name<br>\n";	
	}
		
	?>
			<input type="submit">
		</p>
	</form>
	<br><a href = index.html>back</a>
</body>
</html>
