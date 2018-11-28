<?php
require_once "../connect.php";
$res=mysqli_query($db,"delete from dpprog where id='".
$_GET["id"]."'");
header("Location: index.php");
exit;

 ?>
