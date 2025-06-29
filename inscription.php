<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <title>Inscription – SOSTRA RDC</title>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" href="style.css" />
  <script defer src="script.js"></script>
</head>
<body>

<header class="header">
  <div class="container nav-container">
    <img src="logo.jpeg" class="logo" />
    <nav class="navbar">
      <a href="index.php">Accueil</a>
      <a href="evenement.php">Événement</a>
      <a href="exposants.php">Exposants</a>
      <a href="inscription.php" class="active">Inscription</a>
      <a href="contact.php">Contact</a>
    </nav>
  </div>
</header>

<section class="hero-event">
  <div class="container">
    <h1>Inscription au Sommet</h1>
    <p>Remplissez le formulaire ci-dessous pour participer</p>
  </div>
</section>

<section class="form-section">
  <div class="container">
    <form id="inscriptionForm" class="form-flex">
      <div class="form-col">
        <label>Nom *</label>
        <input type="text" name="nom" required>

        <label>Prénom *</label>
        <input type="text" name="prenom" required>

        <label>Email *</label>
        <input type="email" name="email" required>

        <label>Téléphone *</label>
        <input type="text" name="tel" required>
      </div>

      <div class="form-col">
        <label>Entreprise *</label>
        <input type="text" name="entreprise" required>

        <label>Type de participant *</label>
        <select name="categorie" required>
          <option value="">-- Sélectionner --</option>
          <option value="Exposant">Exposant</option>
          <option value="Visiteur">Visiteur</option>
          <option value="Intervenant">Intervenant</option>
        </select>

        <label>Participants *</label>
        <input type="number" name="participants" min="1" value="1" required>

        <label>Message (optionnel)</label>
        <textarea name="message"></textarea>

        <input type="submit" value="Valider l’inscription" class="btn-primary">
      </div>
    </form>

    <div id="confirmation" style="margin-top: 30px; display:none;"></div>
  </div>
</section>

<footer>
  <div class="container">
    <p>&copy; 2025 SOSTRA RDC</p>
  </div>
</footer>
</body>
</html>
