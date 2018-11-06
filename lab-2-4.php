<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	$num=rand(2,50);
	$arr[]=array();
	for($i=0;$i<$num;$i++){
		$arr[$i]=rand(1,1000);
	}
	echo "Массив из ".$num." элементов, заполненый случайными числами:<br>";
	for($i=0;$i<$num;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>1) <br>";
	$arrnew[]=array();
	$sum=0;
	for($i=0;$i<$num;$i++){
		$sum+=$arr[$i];
		$arrnew[$i]=$sum;
	}
	echo "<br>Полученный массив:";
	for($i=0;$i<$num;$i++){
		echo $arrnew[$i]." ";
	}
?>
</body>
</html>