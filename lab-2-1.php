<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	echo "<p>1)Треугольные числа:<br>";
    $treug[]=array();
	for($i=1;$i<=10;$i++){
		$treug[$i-1]=$i*($i+1)/2;
	}
	for($i=1;$i<=10;$i++){
		echo $treug[$i-1]." ";
	}
	echo "<p>2)Квадраты натуральных чисел:<br>";
	$kvd[]=array();;
	for($i=1;$i<=10;$i++){
		$kvd[$i-1]=$i*$i;
	}
	for($i=1;$i<=10;$i++){
		echo $kvd[$i-1]." ";
	}
	echo "<p>3)Объединенные массивы:<br>";
	
	$rez=array_merge($treug,$kvd);
	
	for($i=1;$i<=20;$i++){
		echo $rez[$i-1]." ";
	}
	
	echo "<p>4)Отсортированный массив:<br>";
	for($i=0;$i<20;$i++){
		for($j=1;$j<20-$i;$j++){
			if($rez[$j]<=$rez[$j-1]){
				$buf=$rez[$j];
				$rez[$j]=$rez[$j-1];
				$rez[$j-1]=$buf;
			}
		}
	}
	
	for($i=1;$i<=20;$i++){
		echo $rez[$i-1]." ";
	}
	echo "<p>5)Первый элемент удален:<br>";
	
	array_splice($rez,0,1);
	for($i=1;$i<=19;$i++){
		echo $rez[$i-1]." ";
	}
	echo "<p>6)Повторяющиеся элементы удалены:<br>"; 
	$rez=array_unique($rez);
	for($i=1;$i<=19;$i++){
		if(isset($rez[$i-1]))
		echo $rez[$i-1]." ";
	}
?> 
</body>
</html>