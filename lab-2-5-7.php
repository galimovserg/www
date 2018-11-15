<html>
<head>
<title>Шевченко Татьяна, Мигутина Диана</title>
</head>
<body>
<?php
	function f($u,$t){
		if($u>=0&&$t>=0){
			return ($u+$t)/($u*$t);
		}else
		if($u<0&&$t>=0){
			return $u*$u-$t/$u;
		}else
    if($u>=0&&$t<0){
			return $u-2*$t;
		}else
    if($u<0&&$t<0){
      return ($t*$t+$u)/(pow($u,3)*pow($t,4));
    }
	};
	echo "<h5>Вариант 7:</h5><hr>";
	echo "<p>1) <br>";
	echo "z = f(a/b,b<sup>8</sup>-a<sup>7</sup>)+f((a<sup>10</sup>+b<sup>12</sup>)/(a*b<sup>2</sup>-a),b)<br>";
	$a=rand(-100,100);
	$b=rand(-100,100);
  if($a==0){$a=1;}
  if($b==0){$a=2;}
	echo "    при a = ".$a."<br>";
	echo "    при b = ".$b."<br>";

	echo "z = ".(f($a/$b,(pow($b,8)-pow($a,7))/$a*$b)+f((pow($a,10)+pow($b,12))/($a*$b*$b-$a),$b));
?>
</body>
</html>
