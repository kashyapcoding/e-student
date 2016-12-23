<?php
define('FPDF_FONTPATH','./fpdf/font/');
require('fpdf/fpdf.php');
require("configure.php");

$s_std=$_POST['s_std'];
$s_div=$_POST['s_div'];

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
$pdf->SetFont('Roboto-Medium','',13);
$pdf->MultiCell(190,5,'S A B T M   H S S   THAYINERI','0','C');
$pdf->Ln(4);
$pdf->SetFont('Roboto-Medium','',13);
$pdf->MultiCell(180,4,'Sanskrit Score List','0','C');
$pdf->Ln(1);
$pdf->MultiCell(180,10,"Second Term : Class - $s_std $s_div",'0','C');
$pdf->Ln(1);
//FIRST ?SECOND?THIRD TERM

$pdf->SetFont('Roboto-Medium','',10);

$pdf->Cell(25,10,'#','1','0','C');
$pdf->Cell(40,10,'Name','1','0','C');
$pdf->Cell(25,10,'Class','1','0','C');
$pdf->Cell(40,10,'Mark','1','0','C');
$pdf->Cell(20,10,'Grade','1','0','C');
$pdf->Cell(20,10,'CE','1','1','C');

/*
$pdf->SetLineWidth(0.6);
$pdf->Line(15,34,180,34);
$pdf->Line(15,42,180,42);
*/

$pdf->SetFont('Roboto-Light','',10);
$sql="SELECT * FROM s_details WHERE s_std='$s_std' AND s_div='$s_div'";
   	$result=$conn->query($sql);
	$si_no=0;
	while($row = $result->fetch_assoc()) 
	  	{   $si_no+=1;
	  		$pdf->Cell(25,10,$si_no,'1','0','C');
			$pdf->Cell(40,10,$row['f_name'].' '.$row['l_name'],'1','0','L');
			$pdf->Cell(25,10,$row['s_std'].' '.$row['s_div'],'1','0','C');
			$pdf->Cell(40,10,$row['s_te'],'1','0','C');
			$pdf->Cell(20,10,$row['s_grade'],'1','0','L');
			$pdf->Cell(20,10,'','1','1','L');

		}
$pdf->Output();
?>