<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
<table border=1>
<?php
	$count=0;
	for($i=1;$i<=10;$i++){
		echo '<tr>';
		for($j=1;$j<=10;$j++){
			$count++;
			if($j%2==0) {
				echo '<td style="color:#FF0000;">';
			}else{
				echo '<td style="color:#000000;">';
			}
			echo "$count</td>";
		}
		echo '</tr>';
	}
?>
</table>
</body>
</html>