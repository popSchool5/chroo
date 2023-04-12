<?php
require('fpdf.php');
define('EURO', chr(128));
$bb = $_GET['id'];




$column_code = "";
$column_name = "";
$column_price = "";
$column_price = "";
$total = 10;
$names = "muh"; 
$methode= "Emporter";
$phone = "0665105444";
$adress = "24 rue julien perette";
$horaire = "10:00"; 
//Create a new PDF file

$pdf = new FPDF('P', 'mm', array(80, 900));
$pdf->AddPage();

//Fields Name position
$Y_Fields_Name_position = 20;
//Table position, under Fields Name
$Y_Table_Position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(232, 232, 232);
//Bold Font for Field Name
$pdf->SetFont('Arial', 'B', 7);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(5);
$pdf->Cell(15, 6, 'Qty', 1, 0, 'C', 1);
$pdf->SetX(20);
$pdf->Cell(45, 6, 'Produit', 1, 0, 'C', 1);
$pdf->SetX(60);
$pdf->Cell(15, 6, 'Prix', 1, 0, 'C', 1);
$pdf->Ln();

//Now show the 3 columns
$pdf->SetFont('Arial', '', 8);
$pdf->SetY($Y_Table_Position);
$pdf->SetX(5);
$pdf->MultiCell(15, 7, $column_code, 1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(20);
$pdf->MultiCell(40, 7, $column_name, 1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->SetX(60);
$pdf->MultiCell(15, 7,$column_price, 1,'C');
$pdf->SetY($Y_Table_Position);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();

$pdf->SetX(20);

$pdf->MultiCell(40, 6, 'Total : '. $total .''.EURO, 1, 'C');
$pdf->SetX(10);
$pdf->MultiCell(60, 8, '- ' . $methode . '', 0, '');
$pdf->SetX(10);
$pdf->MultiCell(60, 8, '- ' . $phone . '', 0, '');
$pdf->SetX(10);
$pdf->MultiCell(60, 8, '- ' . $adress . '', 0, '');
$pdf->SetX(10);
$pdf->MultiCell(60, 8, '- ' . $horaire . '', 0, '');
$pdf-> SetX(10);
$pdf -> MultiCell(60,8,'- ' .$names. '',0,'');
$i = 0;
$pdf->SetY($Y_Table_Position);


$pdf->Output('I');
