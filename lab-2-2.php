<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
    
    $num=rand(3,20);
	
	echo "<p>3) ";
	$arr[]=array();
	for($i=0;$i<$num;$i++){
		$arr[$i]=rand(10,99);
	}
	echo "Массив из ".$num." элементов, заполненый случайными числами:<br>";
	for($i=0;$i<$num;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>4) ";
	sort($arr);
	echo "Массив в отсортированном виде:<br>";
	for($i=0;$i<$num;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>5) ";
	echo "Массив в обратном порядке:<br>";
	$arr=array_reverse($arr);
	for($i=0;$i<$num;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>6) ";
	echo "Удален последний элемент:<br>";
	array_pop($arr);
	$len=count($arr);
	for($i=0;$i<$len;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>7) ";
	$sum=0;
	for($i=0;$i<$len;$i++){
		$sum+=$arr[$i];
	}
	echo "Сумма чисел равна ".$sum.", количество элементов равно ".$len."";
	echo "<p>8) ";
	echo "Среднее арифметическое равно ".($sum/$len)."";
	echo "<p>9) ";
	if(in_array(50,$arr)){
		echo "В массиве есть 50!";
	}else{
		echo "В массиве нет 50!";
	}
	echo "<p>10) ";
	echo "Массив из уникальных значений:<br>";
	$arr=array_unique($arr);
	for($i=0;$i<$len;$i++){
		if(isset($arr[$i])){
			echo $arr[$i]." ";
		}
	}
?>
</body>
</html>