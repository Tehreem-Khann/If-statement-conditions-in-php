<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
	<style type="text/css">
		body{
background-image:url('images/billbg.jpeg');
background-repeat: no-repeat;
background-size: cover;

		}
	</style>
</head>
<body>
	<img src="images/billsicon.png">
<?php
$units=$_POST['units'];
$price=12;
$total=$units*$price;
if ($units>=200 && $units<=500)
 {
 	echo "<input class='form-control' placeholder='Units: $units' readonly><br>";
 	echo "<input class='form-control' placeholder='Price: $price' readonly><br>";
	echo "<input class='form-control' placeholder='Total amount:Rs $total/-' readonly><br>";
}
else if ($units>=501 && $units<=1000)
 {
	$additional_charges=2000;
	$maintainence=6000;
	$grandtotal=$total+$additional_charges+$maintainence;
	echo "<input class='form-control' placeholder='Units: $units' readonly><br>";
 	echo "<input class='form-control' placeholder='Price: $price' readonly><br>";
 	echo "<input class='form-control' placeholder='Additional charges: $additional_charges' readonly><br>";
 	echo "<input class='form-control' placeholder='Maintainence: $maintainence' readonly><br>";
	echo "<input class='form-control' placeholder='Total amount:Rs $grandtotal/-' readonly><br>";
}
else if ($units>1000)
 {
 	$additional_charges=5000;
	$maintainence=1200;
	$grandtotal=$total+$additional_charges+$maintainence;
	echo "<input class='form-control' placeholder='Units: $units' readonly><br>";
 	echo "<input class='form-control' placeholder='Price: $price' readonly><br>";
 	echo "<input class='form-control' placeholder='Additional charges: $additional_charges' readonly><br>";
 	echo "<input class='form-control' placeholder='Maintainence: $maintainence' readonly><br>";
	echo "<input class='form-control' placeholder='Total amount:Rs $grandtotal/-' readonly><br>";
}
else
{
	header('Location: task1.php');
    exit;
}
?>
</body>
</html>
