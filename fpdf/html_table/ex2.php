<?php
require('html_table.php');

$pdf=new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

$html='<table border="1">
<tr>
<td width="50" height="50">  (a)</td><td width="200" height="50">   Basic</td><td width="300" height="50" bgcolor="#D0D0FF">           QAR 2000/- per month</td>
</tr>
<tr>
<td width="50" height="50">  (b)</td><td width="200" height="50">   Professional Allowance</td><td width="300" height="50" bgcolor="#D0D0FF">	           QAR 3000/- per month</td>
</tr>
<td width="50" height="50">  (c)</td><td width="200" height="50">   Food Allowance</td><td width="300" height="50" bgcolor="#D0D0FF">	   Free food or fixed food allowance of Qrs 234 per month wherever mess facility not available</td>
</table>';

$pdf->WriteHTML($html);
$pdf->Output();
?>
