<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nom = htmlspecialchars($_POST['nom']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Envoi par email (optionnel — activer sur serveur réel)
    $destinataire = "contact@sostra-rdc.com";
    $sujet = "Message depuis le site SOSTRA";
    $contenu = "Nom : $nom\nEmail : $email\n\nMessage :\n$message";
    // mail($destinataire, $sujet, $contenu);

    echo "<p>Merci $nom, votre message a bien été envoyé.</p>";
    echo '<a href="index.php">Retour à l’accueil</a>';
}
?>
