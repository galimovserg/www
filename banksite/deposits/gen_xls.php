<?php
function xlsBOF() {
    echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
}
function xlsEOF() {
    echo pack("ss", 0x0A, 0x00);
}
function xlsWriteNumber($Row, $Col, $Value) {
    echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
    echo pack("d", $Value);
}
function xlsWriteLabel($Row, $Col, $Value) {
    $L = strlen($Value);
    echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
    echo $Value;
}
header("Content-Type: application/force-download  charset=utf-8");
header("Content-Type: application/octet-stream  charset=utf-8");
header("Content-Type: application/download charset=utf-8");
header("Content-Disposition: attachment;filename=list.xls");
header("Content-Transfer-Encoding: binary");
xlsBOF();
require_once('../connect.php');
$res=mysqli_query($db,
"select
bank.name as bname,
bank.country as country,
bank.rclass as rclass,
dpprog.name as dpname,
dpprog.percent as dppercent,
(select sum(start_value) from deposit where deposit.prog_id=dpprog.id) as dpsum
from dpprog, bank where dpprog.bid=bank.id
");
$i=0;
xlsWriteLabel($i,0,iconv("utf-8","windows-1251","Номер"));
xlsWriteLabel($i,1,iconv("utf-8","windows-1251","Название банка"));
xlsWriteLabel($i,2,iconv("utf-8","windows-1251","Страна"));
xlsWriteLabel($i,3,iconv("utf-8","windows-1251","Класс надежности"));
xlsWriteLabel($i,4,iconv("utf-8","windows-1251","Название программы"));
xlsWriteLabel($i,5,iconv("utf-8","windows-1251","Процент"));
xlsWriteLabel($i,6,iconv("utf-8","windows-1251","Сумма вкладов по программе"));
while($row=mysqli_fetch_array($res)){
  $i++;
  xlsWriteLabel($i,0,iconv("utf-8","windows-1251",$i));
  xlsWriteLabel($i,1,iconv("utf-8","windows-1251",$row["bname"]));
  xlsWriteLabel($i,2,iconv("utf-8","windows-1251",$row["country"]));
  xlsWriteLabel($i,3,iconv("utf-8","windows-1251",$row["rclass"]));
  xlsWriteLabel($i,4,iconv("utf-8","windows-1251",$row["dpname"]));
  xlsWriteLabel($i,5,iconv("utf-8","windows-1251",$row["dppercent"]."%"));
  xlsWriteLabel($i,6,iconv("utf-8","windows-1251",$row["dpsum"]));
}


xlsEOF();

 ?>
