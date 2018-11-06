<?php
  if($_POST["d"]=="plus"){
    $c=$_POST["a"]+$_POST["b"];

      if(isset($_POST["f"])){
        echo $_POST["a"]." + ".$_POST["b"]." = ".$c;
      }else{
        echo "Результат = ".$c;
      }


  }else{
    $c=$_POST["a"]*$_POST["b"];
    if(isset($_POST["f"])){
      echo $_POST["a"]." * ".$_POST["b"]." = ".$c;
    }else{
        echo "Результат = ".$c;
    }

  }
?>
