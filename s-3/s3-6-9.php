<?php

if(isset($_POST["otp"])){
  $count=0;
  if(isset($_POST["capt"])){
    $text=$_POST["capt"];
    for($i=1;$i<strlen($text);$i++){
      if(($text[$i]=='.'&&$text[$i-1]!='.')||($text[$i]=='?')||($text[$i]=='!')){
        $count++;
      }
    }
  }
  echo "Колличество предложений в тексте равно ".$count;

}else{
  echo "Что-то пошло не так!";
}
 ?>
