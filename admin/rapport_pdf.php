<?php
require '../config.php';
require '../fpdf/fpdf.php';

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,10,'Rapport des inscriptions – SOSTRA RDC',0,1,'C');

$pdf->SetFont('Arial','',11);
$data = $pdo->query("SELECT * FROM inscriptions")->fetchAll();
foreach ($data as $row) {
    $pdf->Cell(0,8, "{$row['nom']} {$row['prenom']} - {$row['entreprise']}",0,1);
}
$pdf->Output();
?>
