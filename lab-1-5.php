<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	echo '<h5>Вариант 2:</h5>';
	$a=rand(-20,20);
	$cha=$a<0?'('.$a.')':$a; 
	$c=rand(-20,20);
	$chc=$c<0?'('.$c.')':$c;
	$d=rand(-20,20);
	$chd=$d<0?'('.$d.')':$d;
	$f=(2*$c-$d/23)/(1-$a/3);
	
	echo "(2*$chc-$chd/23)/(1-$cha/3)=$f";
	
	echo '<h5>Вариант 7:</h5>';
	$a=rand(-20,20);
	$cha=$a<0?'('.$a.')':$a; 
	$b=rand(-20,20);
	$chb=$b<0?'('.$b.')':$b;
	$c=rand(-20,20);
	$chc=$c<0?'('.$c.')':$c;
	$d=rand(-20,20);
	$chd=$d<0?'('.$d.')':$d;
	$f=(42*$c-$d/2+1)/(pow($a,2)-$b-5);
	
	
	echo "(42*$chc-$chd/2+1)/($cha^2-$chb-5)=$f";
?>
</body>
</html>