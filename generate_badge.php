<?php
require 'config.php';
require 'fpdf/fpdf.php';
require 'phpqrcode/qrlib.php';

$id = $_GET['id'] ?? 0;
$stmt = $pdo->prepare("SELECT * FROM inscriptions WHERE id = ?");
$stmt->execute([$id]);
$info = $stmt->fetch();

if (!$info) die("Inconnu");

$qr = "Nom: {$info['prenom']} {$info['nom']}\nCatégorie: {$info['categorie']}\nID: {$info['id']}";
$tmp_qr = "qr_tmp_{$id}.png";
QRcode::png($qr, $tmp_qr, 'L', 3, 1);

$pdf = new FPDF('P', 'mm', [105, 148]);
$pdf->AddPage();
$pdf->Image('logo.jpeg',10,10,30);
$pdf->SetFont('Arial','B',14);
$pdf->Ln(30);
$pdf->Cell(0,10,"Badge Participant",0,1,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(0,10,"{$info['prenom']} {$info['nom']}",0,1,'C');
$pdf->Cell(0,8,"{$info['entreprise']}",0,1,'C');
$pdf->Cell(0,8,"Catégorie : {$info['categorie']}",0,1,'C');
$pdf->Ln(10);
$pdf->Image($tmp_qr, 40, $pdf->GetY(), 30);

$pdf->Output();
unlink($tmp_qr);
?>
