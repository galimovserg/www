<?php
require_once "connect.php";
$res=mysqli_query($db,"delete from movie where film_id='".
$_GET["id"]."'");
header("Location: index.php");
exit;

 ?>
