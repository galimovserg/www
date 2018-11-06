<html>
<head>
<title>Галимов Сергей, Надербаев Ильнар</title>
</head>
<body>
  <?php
    if(isset($_POST["otp"])){
      $count=0;
      for($i=1;$i<=19;$i++){
        if($_POST["f".$i]=="2"){
          $count++;
        }
      }
      if($count>15){
        echo "У Вас покладистый характер<br>";
      }else {
        if($count<8){
            echo "Вашим друзьям можно посочувствовать<br>";
        }else{
          echo "Вы не лишены недостатков, но с вами можно ладить<br>";
        }
      }
    }
   ?>
   <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>" style="display: <?php if(isset($_POST["otp"])){echo 'none';}else{echo 'block';} ?>;">
     <br>Считаете лм Вы, что у многих ваших знакомых хороший характер?
     <br><input type="radio" name="f1" value=1; checked>Да
     <br><input type="radio" name="f1" value=2;>Нет
     <br>Раздражают ли Вас мелкие повседневные обязанности?
     <br><input type="radio" name="f2" value=1; checked>Да
     <br><input type="radio" name="f2" value=2;>Нет
     <br>Верите ли Вы, что ваши друзья преданы Вам?
     <br><input type="radio" name="f3" value=2; checked>Да
     <br><input type="radio" name="f3" value=1;>Нет
     <br>Неприятно ли Вам, когда незнакомый человек делает Вам замечание?  5
     <br><input type="radio" name="f4" value=1; checked>Да
     <br><input type="radio" name="f4" value=2;>Нет
     <br>Способны ли Вы ударить собаку или кошку?
     <br><input type="radio" name="f5" value=1; checked>Да
     <br><input type="radio" name="f5" value=2;>Нет
     <br>Часто ли Вы принимаете лекарства?
     <br><input type="radio" name="f6" value=1; checked>Да
     <br><input type="radio" name="f6" value=2;>Нет
     <br>Часто ли Вы меняете магазин, в который ходите за продуктами?
     <br><input type="radio" name="f7" value=1; checked>Да
     <br><input type="radio" name="f7" value=2;>Нет
     <br>Тяготят ли Вас общественные обязанности?
     <br><input type="radio" name="f8" value=1; checked>Да
     <br><input type="radio" name="f8" value=2;>Нет
     <br>Способны ли Вы ждать более 5 минут, не проявляя беспокойства?
     <br><input type="radio" name="f9" value=2; checked>Да
     <br><input type="radio" name="f9" value=1;>Нет
     <br>Часто ли Вам приходят в голову мысли о Вашей невезучести?
     <br><input type="radio" name="f10" value=2; checked>Да
     <br><input type="radio" name="f10" value=1;>Нет
     <br>Сохранилась ли у Вас фигура по сравнению с прошлым?
     <br><input type="radio" name="f11" value=1; checked>Да
     <br><input type="radio" name="f11" value=2;>Нет
     <br>Можете ли Вы с улыбкой воспринимать подтрунивание друзей?
     <br><input type="radio" name="f12" value=1; checked>Да
     <br><input type="radio" name="f12" value=2;>Нет
     <br>Нравится ли Вам семейная жизнь?
     <br><input type="radio" name="f13" value=2; checked>Да
     <br><input type="radio" name="f13" value=1;>Нет
     <br>Злопамятны ли Вы?
     <br><input type="radio" name="f14" value=2; checked>Да
     <br><input type="radio" name="f14" value=1;>Нет
     <br>Находите ли Вы, что стоит погода, типичная для данного времени года?
     <br><input type="radio" name="f15" value=1; checked>Да
     <br><input type="radio" name="f15" value=2;>Нет
     <br>Случается ли Вам с утра быть в плохом настроении?
     <br><input type="radio" name="f16" value=1; checked>Да
     <br><input type="radio" name="f16" value=2;>Нет
     <br>Раздражает ли Вас современная живопись?
     <br><input type="radio" name="f17" value=1; checked>Да
     <br><input type="radio" name="f17" value=2;>Нет
     <br>Надоедает ли Вам присутствие чужих детей в доме более одного часа?
     <br><input type="radio" name="f18" value=1; checked>Да
     <br><input type="radio" name="f18" value=2;>Нет
     <br>Надоедает ли Вам делать лабораторные по PHP?
     <br><input type="radio" name="f19" value=2; checked>Да
     <br><input type="radio" name="f19" value=1;>Нет
     <br><input type="submit" name="otp" value="Отправить">
   </form>

</body>
</html>
