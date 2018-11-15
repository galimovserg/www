<html>
<head>
<title>Шевченко Татьяна, Мигутина Диана</title>
</head>
<body>
<?php
	require_once "lab-2-6-2-lib.php";

	echo "<h5>Вариант 2:</h5><hr>";
	qtitle();
	$myarr=randomtb(rand(5,20));
	//var_dump($myarr);
	echo "<p>Заполненная матрица:<br>";
	printtb($myarr);
	echo "<p>Результат:<br>";
	trancform($myarr);


?>
</body>
</html>
