<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	echo '<h5>Вариант 2:</h5><hr>';
	$m=rand(2,10000);	
	$n=rand(2,10000);
	//тестовый
	//$m=220;
	//$n=284;
	echo "m=$m   n=$n<br>";
	$sumdelm=0;
	for($i=1;$i<$m;$i++){
		if($m%$i==0) $sumdelm+=$i;
	}
	$sumdeln=0;
	for($i=1;$i<$n;$i++){
		if($n%$i==0) $sumdeln+=$i;
	}
	echo 'Сумма делителей числа m равна '.$sumdelm.'</br>';
	echo 'Сумма делителей числа n равна '.$sumdeln.'</br>';
	if($sumdelm==$n&&$sumdeln==$m){
		echo 'Эти числа дружественные.';
	}else{
		
		echo 'Эти числа недружественные.';
	}

?>
</body>
</html>