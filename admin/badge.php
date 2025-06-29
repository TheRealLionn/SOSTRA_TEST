<?php
require '../config.php';
require '../fpdf/fpdf.php';

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM inscriptions WHERE id = ?");
$stmt->execute([$id]);
$info = $stmt->fetch();

if (!$info) { exit("Introuvable."); }

$pdf = new FPDF('P', 'mm', [105, 148]); // A6
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 16);
$pdf->Image('../logo.png', 10, 10, 30);
$pdf->Ln(30);
$pdf->Cell(0, 10, 'Badge Participant', 0, 1, 'C');

$pdf->SetFont('Arial', '', 12);
$pdf->Cell(0, 8, $info['nom'] . ' ' . $info['prenom'], 0, 1, 'C');
$pdf->Cell(0, 8, $info['entreprise'], 0, 1, 'C');
$pdf->Cell(0, 8, 'SOSTRA RDC 2025', 0, 1, 'C');

$pdf->Output();
?>
