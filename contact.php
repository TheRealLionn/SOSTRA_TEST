<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Contact – SOSTRA RDC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
</head>
<body>

<!-- Navigation -->
<header class="header">
  <div class="container nav-container">
    <img src="logo.jpeg" alt="SOSTRA RDC" class="logo" />
    <nav class="navbar">
      <a href="index.php">Accueil</a>
      <a href="evenement.php">Événement</a>
      <a href="exposants.php">Exposants</a>
      <a href="inscription.php">Inscription</a>
      <a href="contact.php" class="active">Contact</a>
    </nav>
  </div>
</header>

<!-- Hero section -->
<section class="hero-event">
  <div class="container">
    <h1>Contactez-nous</h1>
    <p>Nous sommes à votre écoute pour toute question ou partenariat</p>
  </div>
</section>

<!-- Formulaire -->
<section class="form-section">
  <div class="container">
    <form action="contact_submit.php" method="post" class="form-flex">
      <div class="form-col">
        <label>Votre nom *</label>
        <input type="text" name="nom" required>

        <label>Votre email *</label>
        <input type="email" name="email" required>

        <label>Votre message *</label>
        <textarea name="message" required></textarea>

        <input type="submit" value="Envoyer le message" class="btn-primary" />
      </div>

      <div class="form-col" style="justify-content: center;">
        <h3 style="color: #003366;">Informations</h3>
        <p><strong>Email :</strong> contact@sostra-rdc.com</p>
        <p><strong>Téléphone :</strong> +243 999 000 000</p>
        <p><strong>Adresse :</strong> Kolwezi, RDC</p>

        <!-- Carte Google Maps (facultatif) -->
        <iframe
          src="https://www.google.com/maps/embed?pb=..."
          width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
      </div>
    </form>
  </div>
</section>

<!-- Footer -->
<footer>
  <div class="container">
    <p>&copy; 2025 SOSTRA RDC – Tous droits réservés</p>
  </div>
</footer>

</body>
</html>
