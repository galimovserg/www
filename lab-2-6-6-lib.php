<?php
function qtitle(){
		echo "Дана квадратная матрица порядка N.<br> Для каждого столбца матрицы найти наименьший элемент.<br> ";
		echo "Вычислить и напечатать произведение найденных наименьших элементов.";
	};
	function randomtb($n){
		$arr[][]=array();
		for($i=0;$i<$n;$i++){
			for($j=0;$j<$n;$j++){
				$arr[$i][$j]=rand(1,50);
			}
		}
		return $arr;
	};
	function printtb($arr){
		echo "<table  border=1>";
		for($i=0;$i<count($arr);$i++){
			echo "<tr>";
			for($j=0;$j<count($arr[$i]);$j++){
				echo "<td>".$arr[$i][$j]."</td>";
			}
			echo "</tr>";
		}
		echo "</table>";
	}
	function trancform($arr){
		$tarr[]=array();
		for($i=0;$i<count($arr);$i++){
			for($j=0;$j<count($arr[$i]);$j++){
				if($i==0){
					$tarr[$j]=$arr[$i][$j];
				}
				if($arr[$i][$j]<$tarr[$j]){
					$tarr[$j]=$arr[$i][$j];
				}
			}
			
		}
		$locarr[][]=array();
		$locarr[0]=$tarr;
		echo "<p>Наименьшие элементы:<br>";
		printtb($locarr);
		$p=1.0;
		for($i=0;$i<count($tarr);$i++){
			$p=$p*$tarr[$i];
		}
		echo "<p>Произведение элементов:<br>";
		echo $p;
		return $tarr;
		
	}
?>