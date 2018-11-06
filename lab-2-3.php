<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
$cust= array("cnum" => "2001", 
               "cname" => "Hoffman", 
               "city" => "London",
			   "snum" => "1001"); 
	echo "<p>1) <br>";
	var_dump($cust);
	$cust["rating"]=100;
	echo "<p>2) <br>";
	var_dump($cust);
	array_multisort($cust);
	echo "<p>3) <br>";
	var_dump($cust);
	echo "<p>4) <br>";
	ksort($cust);
	var_dump($cust);
	echo "<p>5) <br>";
	sort($cust);
	var_dump($cust);
?>
</body>
</html>