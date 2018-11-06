<?php
  if(isset($_POST["otp"])&&isset($_POST["a"])&&isset($_POST["b"])){
    if($_POST["a"]==""&&$_POST["b"]==""){
      echo "Вы забыли ввести слова!";
    }else{
      $chars[]=array();
      $a=$_POST["a"];
      $b=$_POST["b"];
      $p=0;
      for($i=0;$i<strlen($b);$i++){
        $p=1;
        for($j=0;$j<strlen($a);$j++){
          if($b[$i]==$a[$j]){
            $a=substr_replace($a,'',$j,1);
            $p=0;
            break;
          }
        }
        if($p==1){break;}

      }
      if($p==1){
        echo "Увы, нельзя!";
      }else{
        echo "Можно!";
      }


    }
  }else{
    echo "Неверный формат!";
  }
?>
