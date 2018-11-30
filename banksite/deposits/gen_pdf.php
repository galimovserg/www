<?php
define('FPDF_FONTPATH','../fpdf/font/');
require('../fpdf/fpdf.php');



class PDF extends FPDF
{
// Load data
function LoadData()
{
  require_once('../connect.php');
  $data=array();
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
  while($row=mysqli_fetch_array($res)){
    $data[]=$row;
  }
	return $data;
}

// Colored table
function FancyTable($header, $data)
{
	// Colors, line width and bold font
	$this->SetFillColor(100,0,200);
	$this->SetTextColor(255);
	$this->SetDrawColor(50,0,200);
	$this->SetLineWidth(.3);

	// Header
	$w = array(10, 45, 40, 45, 60, 30, 45);
	for($i=0;$i<count($header);$i++)
		$this->Cell($w[$i],7,iconv("utf-8","windows-1251",$header[$i]),1,0,'C',true);
	$this->Ln();
	// Color and font restoration
	$this->SetFillColor(224,235,255);
	$this->SetTextColor(0);
	// Data
	$fill = false;
  $i=0;
	foreach($data as $row)
	{
    $i++;
    $this->Cell($w[0],6,$i,'LR',0,'C',$fill);
		$this->Cell($w[1],6,iconv("utf-8","windows-1251",$row["bname"]),'LR',0,'C',$fill);
		$this->Cell($w[2],6,iconv("utf-8","windows-1251",$row["country"]),'LR',0,'C',$fill);
		$this->Cell($w[3],6,iconv("utf-8","windows-1251",$row["rclass"]),'LR',0,'C',$fill);
		$this->Cell($w[4],6,iconv("utf-8","windows-1251",$row["dpname"]),'LR',0,'C',$fill);
    $this->Cell($w[5],6,iconv("utf-8","windows-1251",$row["dppercent"])."%",'LR',0,'C',$fill);
    $this->Cell($w[6],6,iconv("utf-8","windows-1251",$row["dpsum"]),'LR',0,'C',$fill);
    $this->Ln();
		$fill = !$fill;
	}
	// Closing line
	$this->Cell(array_sum($w),0,'','T');
}
}

$pdf = new PDF();
// Column headings
$header = array('№','Наименование банка', 'Страна', 'Класс надежности', 'Название программы','% годовых','сумма по программе');
// Data loading
$data = $pdf->LoadData();
$pdf->AddFont('ArialMT','','arial.php');
$pdf->SetFont('ArialMT','',11);
$pdf->AddPage('L','A3');
$pdf->FancyTable($header,$data);
$pdf->Output();
?>
