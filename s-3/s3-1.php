<?php
if(is_numeric($_POST["a"])&&is_numeric($_POST["b"])){
  if($_POST["a"]>$_POST["b"]){
    echo $_POST["a"];
  }else
  if($_POST["a"]<$_POST["b"]){
    echo $_POST["b"];
  }else {
    echo "Числа равны!";
  }
}else{
  echo "неверный формат";
}
 ?>
