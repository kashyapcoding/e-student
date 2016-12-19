<?php
define('FPDF_FONTPATH','./fpdf/font/');
require('fpdf/fpdf.php');
require("configure.php");

class PDF extends FPDF
{
// Page header
function Header()
{
	// Logo
	//$this->Image('fav.png',53,12,7);
}

// Page footer
function Footer()
{
	// Position at 1.5 cm from bottom
	$this->SetY(-15);
	// Arial italic 8
	$this->SetFont('Arial','I',8);
	// Page number
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->AddFont('Roboto-Medium','','Roboto-Medium.php');
$pdf->AddFont('Roboto-Light','','Roboto-Light.php');
$pdf->SetFont('Roboto-Medium','',15);
$pdf->MultiCell(190,10,'S A B T M   H S S   T H A Y I N E R I','0','C');
$pdf->Ln(3);
$pdf->SetFont('Roboto-Medium','',13);
$pdf->MultiCell(180,10,'Sanskrit Score List','0','C');
//$pdf->Cell(0,10,'SABTM HSS THAYINERI	SANSKROT SCORE LIST');
//FIRST ?SECOND?THIRD TERM
$pdf->Ln(3);

$pdf->SetFont('Roboto-Medium','',10);

$pdf->Cell(15,10,'#','','0','C');
$pdf->Cell(60,10,'Name','','0','C');
$pdf->Cell(25,10,'Division','','0','C');
$pdf->Cell(30,10,'Mark','','0','C');
$pdf->Cell(30,10,'Grade','','0','C');
$pdf->Cell(20,10,'CE','','1','C');

$pdf->SetFont('Roboto-Light','',10);

$sql="SELECT * FROM s_details";
   	$result=$conn->query($sql);
	$si_no=0;
	while($row = $result->fetch_assoc()) 
	  	{   $si_no+=1;
	  		$pdf->Cell(15,10,$si_no,'0','0','C');
			$pdf->Cell(60,10,$row['f_name'].' '.$row['l_name'],'','0','C');
			$pdf->Cell(25,10,$row['s_std'].' '.$row['s_div'],'','0','C');
			$pdf->Cell(30,10,$row['s_te'],'','0','C');
			$pdf->Cell(30,10,$row['s_grade'],'','0','C');
			$pdf->Cell(20,10,'','','1','C');

		}
$pdf->Output();
?>