<?php
	function qtitle(){
		echo "В матрице Z(n,n) каждый элемент столбца разделить на диагональный, стоящий в<br> том же столбце. Исходный и скорректированный массивы вывести на экран. ";
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
			for($j=0;$j<count($arr[$i]);$j++){
				$tarr[$i][$j]=round($arr[$i][$j]/$arr[$i][$i],2);
			}
			
		}
		return $tarr;
		
	}
?>