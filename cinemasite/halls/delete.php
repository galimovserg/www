<?php
require_once "connect.php";
$res=mysqli_query($db,"delete from hall where id='".
$_GET["id"]."'");
header("Location: index.php");
exit;

 ?>
