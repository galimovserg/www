<html>
<head>
<title>Шевченко Татьяна, Мигутина Диана</title>
</head>
<body>
<?php
	function f($u,$t){
		if($u>=0){
			return $u+2*$t;
		}else
		if($u<0&&$u>-1){
			return $u+$t;
		}else{
			return $u*$u-2*$t+1;
		}
	};
	echo "<h5>Вариант 2:</h5><hr>";
	echo "<p>1) <br>";
	echo "z = f(a,b<sup>2</sup>-a)+f(a,b<sup>2</sup>)<br>";
	$a=rand(-100,100);
	$b=rand(-100,100);
	echo "    при a = ".$a."<br>";
	echo "    при b = ".$b."<br>";
	echo "z = ".(f($a,$b*$b-$a)+f($a,$b*$b));
?>
</body>
</html>
