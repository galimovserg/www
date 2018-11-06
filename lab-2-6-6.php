<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	require_once "lab-2-6-6-lib.php";
	echo "<h5>Вариант 6:</h5><hr>";
	qtitle();
	$myarr=randomtb(rand(5,20));
	//var_dump($myarr);
	echo "<p>Заполненная матрица:<br>";
	printtb($myarr);
	
	$myarr=trancform($myarr);
	

?>
</body>
</html>