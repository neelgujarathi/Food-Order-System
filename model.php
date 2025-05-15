<?php
require('pdf/fpdf.php');

$pdf = new FPDF();
$pdf->addPage();
$pdf-> setFont("Arial", "IBU", 17);
$pdf ->cell(40, 10, "Hello Guyzz!!");
$pdf -> output();
?>