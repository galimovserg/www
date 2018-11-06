<html>
<head>
<title>Галимов Сергей</title>
</head>
<body>
<?php
	define('NUM_E',2.71828);
	echo '<p>Число e равно '.NUM_E.'<br>';
	$num_el=NUM_E;
	echo '$num_el='.$num_el.'-'.gettype($num_el).'<br>';
	settype($num_el,'string');
	echo '$num_el='.$num_el.'-'.gettype($num_el).'<br>';
	settype($num_el,'integer');
	echo '$num_el='.$num_el.'-'.gettype($num_el).'<br>';
	settype($num_el,'boolean');
	echo '$num_el='.$num_el.'-'.gettype($num_el).'<br>';
	
?>
</body>
</html>