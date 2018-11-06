<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	require_once "lab-2-6-1-lib.php";
	
	echo "<h5>Вариант 1:</h5><hr>";
	qtitle();
	$myarr=randomtb(rand(5,20));
	//var_dump($myarr);
	echo "<p>Заполненная матрица:<br>";
	printtb($myarr);
	echo "<p>Преобразованная матрица:<br>";
	$myarr=trancform($myarr);
	printtb($myarr);

?>
</body>
</html>