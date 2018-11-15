<?php
	function qtitle(){
		echo "Для заданной целочисленной матрицы найти максимум среди сумм элементов диагоналей,<br>
параллельных главной диагонали матрицы. ";
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
		$tarr[][]=array();
		for($i=0;$i<count($arr);$i++){

      for($j=0;$j<=$i;$j++){
				if(){

        }
			}

		}
		return $tarr;

	}
?>
