<?php
require('config.php');
require('pdf/fpdf.php');

class POF extends FPDF
{
    function Header()
    {
        $this->SetTitle('Food Bill');
        $this->SetFont("Arial", 'B', 13);
        $this->Cell(40);
        $this->Cell(200, 20, 'Food Bill', "0", "1", "C");
        $this->Ln(40);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial', 'I', 8);
        $this->Cell(20, 10, 'Page '.$this->PageNo().'/{nb}', 0, 0, 'C');
    }
}

$db = new dbObj();
$connString = $db->getConnstring();
$display_heading = array('id'=>'ID', 'Name'=>'Name', 'Contact'=>'Contact', 'Email'=>'Email', 'Address'=>'Address', 'ItemType'=>'ItemType', 'ItemName'=>'ItemName', 'Quantity'=>'Quantity', 'TotalBill'=>'TotalBill');
$result = mysqli_query($connString, "SELECT id, Name, Contact, Email, Address, ItemType, ItemName, Quantity, TotalBill FROM orderform") or die(mysqli_error($conn));
$header = mysqli_query($connString, "SHOW columns FROM orderform");

$pdf = new FPDF('L','mm',array(210,295));
$pdf->AddPage('L');
$pdf->AliasNbPages();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(250, 20, 'Food Bill', "0", "1", "C");
$pdf->Cell(500, 20, 'Date-', "0", "1", "C");
foreach($header as $heading)
{
    $pdf->Cell(30, 10, $display_heading[$heading['Field']], 1 );
    
}
foreach($result as $row)
{
    $pdf->Ln();
    foreach($row as $column)
    {
        $pdf->Cell(30, 12, $column, 1);
    }
}

$pdf->Output();
?>
