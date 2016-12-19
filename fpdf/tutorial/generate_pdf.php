<?php
require('fpdf/fpdf.php');

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','',13);
$pdf->Cell(0, 7, 'Sub : ' . "Employment Contract", 0, 20);