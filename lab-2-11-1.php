<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<?php
echo '<h5>Вариант 1:</h5><hr>';
$m=rand()+2;
echo "m=$m<br>";
$mn=$m;
$i=2;
$count=0;
$arr = array();
while($mn!=1){
	if($mn%$i==0){
		$mn=$mn/$i;
		$count++;
		$arr[$count]=$i;
		echo " ".$i;
	}else{
		if($i*$i>$mn){
			$count++;
			$arr[$count]=$mn;
			echo " ".$mn;
			$mn=1;
		}
		$i++;
		
	}
}

?>
</body>
</html>