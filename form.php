<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Array</title>
</head>
<body>

	<?php

		$id = $_GET["id"];
		$lname = $_GET["lname"];
		$fname = $_GET["fname"];
		$mi = $_GET["mi"];
		$deptname = $_GET["deptname"];
		$yr = $_GET["yr"];
		$address = $_GET["addrss"];
		$cont = $_GET["cont"];
		$num = $_GET["num"];


		$arr = array('ID' => $id, 'Last Name' => $lname, 'First Name' => $fname, 
			'Middle Initial' => $mi, 'Department' => $deptname, 'Year Level' => $yr
			, 'Emergency Address' => $address, 'Emergency Contact Name' => $cont
			, 'Emergency Contact Number' => $num);

		function pre_r($array) {
		echo '<pre>';
		print_r($array);
		echo '</pre>';
		}
		
		pre_r($arr);
		



		?>

</body>
</html>