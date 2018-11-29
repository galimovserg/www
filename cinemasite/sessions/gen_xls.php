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
require_once('connect.php');
$res=mysqli_query($db,
"select
movie.film_name as mname,
movie.film_genre as mgenre,
movie.film_year as myear,
hall.name as hname,
hall.type as htype,
mvsession.date as mvdate,
mvsession.time as mvtime
from
mvsession,
hall,
movie
where mvsession.hall_id=hall.id and mvsession.movie_id=movie.film_id");
$i=0;
while($row=mysqli_fetch_array($res)){
  $i++;
  xlsWriteLabel($i,0,iconv("utf-8","windows-1251",$row["mname"]));
  xlsWriteLabel($i,1,iconv("utf-8","windows-1251",$row["mgenre"]));
  xlsWriteLabel($i,2,iconv("utf-8","windows-1251",$row["myear"]));
  xlsWriteLabel($i,3,iconv("utf-8","windows-1251",$row["hname"]));
  xlsWriteLabel($i,4,iconv("utf-8","windows-1251",$row["htype"]));
  xlsWriteLabel($i,5,iconv("utf-8","windows-1251",$row["mvdate"]." ".$row["mvtime"]));
}


xlsEOF();

 ?>
