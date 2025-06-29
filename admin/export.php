<?php
require '../config.php';
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="inscriptions.csv"');

$output = fopen("php://output", "w");
fputcsv($output, ['Nom', 'Prénom', 'Email', 'Téléphone', 'Entreprise', 'Participants', 'Date']);
$data = $pdo->query("SELECT * FROM inscriptions")->fetchAll();
foreach ($data as $row) {
    fputcsv($output, [$row['nom'], $row['prenom'], $row['email'], $row['tel'], $row['entreprise'], $row['participants'], $row['date_inscription']]);
}
fclose($output);
?>
