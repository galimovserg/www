

		<?php
		define('FPDF_FONTPATH','../fpdf/font/');
		require('../fpdf/fpdf.php');



		class PDF extends FPDF
		{
		// Load data
		function LoadData()
		{
		  require_once('connect.php');
		  $data=array();
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
		  while($row=mysqli_fetch_array($res)){
		    $data[]=$row;
		  }
			return $data;
		}

		// Colored table
		function FancyTable($header, $data)
		{
			// Colors, line width and bold font
			$this->SetFillColor(100,200,50);
			$this->SetTextColor(255);
			$this->SetDrawColor(100,200,100);
			$this->SetLineWidth(.3);

			// Header
			$w = array(10, 45, 40, 45, 60, 30, 45);
			for($i=0;$i<count($header);$i++)
				$this->Cell($w[$i],7,iconv("utf-8","windows-1251",$header[$i]),1,0,'C',true);
			$this->Ln();
			// Color and font restoration
			$this->SetFillColor(200,255,200);
			$this->SetTextColor(0);
			// Data
			$fill = false;
		  $i=0;
			foreach($data as $row)
			{
		    $i++;
		    $this->Cell($w[0],7,$i,'LR',0,'C',$fill);
				$this->Cell($w[1],7,iconv("utf-8","windows-1251",$row["mname"]),'LR',0,'C',$fill);
				$this->Cell($w[2],7,iconv("utf-8","windows-1251",$row["mgenre"]),'LR',0,'C',$fill);
				$this->Cell($w[3],7,iconv("utf-8","windows-1251",$row["myear"]),'LR',0,'C',$fill);
				$this->Cell($w[4],7,iconv("utf-8","windows-1251",$row["hname"]),'LR',0,'C',$fill);
		    $this->Cell($w[5],7,iconv("utf-8","windows-1251",$row["htype"]),'LR',0,'C',$fill);
		    $this->Cell($w[6],7,iconv("utf-8","windows-1251",$row["mvdate"]." ".$row["mvdate"]),'LR',0,'C',$fill);
		    $this->Ln();
				$fill = !$fill;
			}
			// Closing line
			$this->Cell(array_sum($w),0,'','T');
		}
		}

		$pdf = new PDF();
		// Column headings
		$header = array('№','Название фильма', 'Жанр', 'Год выпуска','Кинозал','Тип','Дата и время');
		// Data loading
		$data = $pdf->LoadData();
		$pdf->AddFont('ArialMT','','arial.php');
		$pdf->SetFont('ArialMT','',11);
		$pdf->AddPage('L','A3');
		$pdf->FancyTable($header,$data);
		$pdf->Output();
		?>
