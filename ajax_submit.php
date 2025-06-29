<?php
require 'config.php';

try {
    $stmt = $pdo->prepare("INSERT INTO inscriptions (nom, prenom, email, tel, entreprise, participants, message, categorie)
                           VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['tel'],
        $_POST['entreprise'], $_POST['participants'], $_POST['message'] ?? '',
        $_POST['categorie']
    ]);

    $id = $pdo->lastInsertId();
    echo json_encode(["success" => true, "id" => $id, "prenom" => $_POST['prenom']]);
} catch (Exception $e) {
    echo json_encode(["success" => false, "message" => $e->getMessage()]);
}
?>
