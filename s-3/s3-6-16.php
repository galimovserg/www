<html>
<head><meta charset="utf-8"></head>
<?php

if(isset($_POST["otp"])){
  $count=0;
  if(isset($_POST["capt"])){
    $text=$_POST["capt"];
    $arr=explode(" ",$text);
    for($i=sizeof($arr)-1;$i>=0;$i--){
      if($arr!="")
        echo $arr[$i]." ";
    }
  }


}else{
  echo "Что-то пошло не так!";
}
 ?>
