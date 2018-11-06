<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
	function f($u,$t){
		if($u>=0&&$t>=0){
			return $u+$t;
		}else
		if($u<0&&$t>=0){
			return ($u*$u)+$t;
		}else
		if($u>=0&&$t<0){
			return $u-(2*$t);
		}else
		if($u<0&&$t<0){
			return ($t+(3*$u))/($u*$t);
		}else return 0;
		
	};
	echo "<h5>Вариант 6:</h5><hr>";
	echo "<p>1) <br>";
	echo "z = f(a,b<sup>8</sup>-a<sup>7</sup>)+f(a<sup>10</sup>-b<sup>11</sup>,b)<br>";
	$a=rand(-15,15);
	$b=rand(-15,15);
	echo "    при a = ".$a."<br>";
	echo "    при b = ".$b."<br>";
	echo "z = ".(f($a,pow($b,8)-pow($a,7))+f(pow($a,10)-pow($b,11),$b));
?>
</body>
</html>