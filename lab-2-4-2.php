<html>
<head>
<title>Шевченко Татьяна, Мигутина Диана</title>
</head>
<body>
<?php
	$num=rand(2,50);
	$arr[]=array();
	for($i=0;$i<$num;$i++){
		$arr[$i]=rand(1,1000)-500;
	}
	echo "Массив из ".$num." элементов, заполненый случайными числами:<br>";
	for($i=0;$i<$num;$i++){
		echo $arr[$i]." ";
	}
	echo "<p>1) <br>";
	$arrnew[]=array();
  $pos=0;
	for($i=0;$i<$num;$i++){
		if($arr[$i]<0){
      $arrnew[$pos]=$arr[$i];
      $pos++;
    }

	}
  for($i=0;$i<$num;$i++){
		if($arr[$i]==0){
      $arrnew[$pos]=$arr[$i];
      $pos++;
    }

	}
  for($i=0;$i<$num;$i++){
		if($arr[$i]>0){
      $arrnew[$pos]=$arr[$i];
      $pos++;
    }

	}
	echo "<br>Полученный массив:";
	for($i=0;$i<$num;$i++){
		echo $arrnew[$i]." ";
	}
?>
</body>
</html>
