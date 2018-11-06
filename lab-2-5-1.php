<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	function f($u,$t){
		if($u>0&&$t>0){
			return $u*$u+$t;
		}else
		if($u<=0&&$t<=0){
			return $u+$t*$t;
		}else{
			return $u+$t;
		}
	};
	echo "<h5>Вариант 1:</h5><hr>";
	echo "<p>1) <br>";
	echo "z = f(a-b,b<sup>2</sup>-a)+f(a<sup>2</sup>b,b<sup>2</sup>)<br>";
	$a=rand(-100,100);
	$b=rand(-100,100);
	echo "    при a = ".$a."<br>";
	echo "    при b = ".$b."<br>";
	echo "z = ".(f($a-$b,$b*$b-$a)+f($a*$a*$b,$b*$b));
?>
</body>
</html>