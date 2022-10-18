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
	ตารางจัดอันดับพนักงานยอดเยี่ยม
<table width="200" border="1">
  <tbody>
    <tr>
	  <td>rank</td>
	  <td>staff_id</td>
	  <td>staff_name</td>
	  <td>success</td>
	  <td>total_attempt</td>
	  <td>success_rate</td>
    <tr>
<?php
$sql="	SELECT RANK() over(ORDER BY sum(pc.success) DESC) AS rank, pc.staff_id AS staff_id,s.staff_name AS staff_name, sum(pc.success) AS success,count(*) AS total_attempt , sum(case when pc.success =1 then 1 else 0 end) / count(*) AS success_rate
		FROM promotion_customer AS pc,staff AS s
        WHERE s.staff_id = pc.staff_id
		GROUP BY pc.staff_id
		ORDER BY success DESC";
$result=mysqli_query($db,$sql);
while ($list=mysqli_fetch_array($result))
	{
	$rank=$list["rank"];
	$staff_id=$list["staff_id"];
	$staff_name=$list["staff_name"];
	$success=$list["success"];
	$total_attempt=$list["total_attempt"];
	$success_rate=$list["success_rate"];
	
	echo "<td>  $rank </td>";	
	echo "<td>  $staff_id </td>";	
	echo "<td>  $staff_name </td>";	
	echo "<td>  $success </td>";
	echo "<td>  $total_attempt </td>";	
	echo "<td>  $success_rate </td>";
	echo "</tr>";
	}
?>
  </tbody>
</table>	
	
	<br>
สถิติเวลาที่ลูกค้าตัดสินใจเปลี่ยนโปร
	<table width="200" border="1">
  <tbody>
    <tr>
	  <td>time_offer</td>
	  <td>success</td>
	  <td>total_attempt</td>
	  <td>success_rate</td>
    <tr>
<?php
$sql="	SELECT time_offer,sum(success) AS success,count(*) AS total_attempt , sum(case when success =1 then 1 else 0 end) / count(*) AS success_rate
		FROM promotion_customer
		GROUP BY time_offer
		ORDER BY time_offer ASC";
$result=mysqli_query($db,$sql);
while ($list=mysqli_fetch_array($result))
	{
	$time_offer=$list["time_offer"];
	$success=$list["success"];
	$total_attempt=$list["total_attempt"];
	$success_rate=$list["success_rate"];
	
	echo "<td>  $time_offer </td>";	
	echo "<td>  $success </td>";	
	echo "<td>  $total_attempt </td>";
	echo "<td>  $success_rate </td>";
	echo "</tr>";
	}
?>
  </tbody>
</table>
	
	
<br>สถิติโปรโมชั่น
	<table width="200" border="1">
  <tbody>
    <tr>
	  <td>promotion_id</td>
	  <td>promotion_name</td>
	  <td>success</td>
	  <td>total_attempt</td>
	  <td>success_rate</td>
    <tr>
<?php
$sql="	SELECT pc.promotion_id  AS promotion_id, p.promotion_name AS promotion_name,
		sum(success) AS success,count(*) AS total_attempt , 
		sum(case when success =1 then 1 else 0 end) / count(*) AS success_rate
		FROM promotion_customer AS pc, promotion AS p
        WHERE pc.promotion_id = p.promotion_id
		GROUP BY promotion_id
		ORDER BY promotion_id ASC";
$result=mysqli_query($db,$sql);
while ($list=mysqli_fetch_array($result))
	{
	$promotion_id=$list["promotion_id"];
	$promotion_name=$list["promotion_name"];
	$success=$list["success"];
	$total_attempt=$list["total_attempt"];
	$success_rate=$list["success_rate"];
	
	
	echo "<td>  $promotion_id </td>";	
	echo "<td>  $promotion_name </td>";
	echo "<td>  $success </td>";	
	echo "<td>  $total_attempt </td>";
	echo "<td>  $success_rate </td>";
	
	echo "</tr>";
	}
?>
  </tbody>
</table>
	
	
	<br><a href="index.html">back</a>
</body>
</html>