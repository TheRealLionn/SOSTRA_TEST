<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if ($_POST['user'] === 'admin' && $_POST['pass'] === 'admin123') {
        $_SESSION['logged'] = true;
        header("Location: dashboard.php");
        exit;
    } else {
        $error = "Identifiants incorrects.";
    }
}
?>
<h2>Connexion admin</h2>
<form method="post">
  <input name="user" placeholder="Utilisateur"><br>
  <input type="password" name="pass" placeholder="Mot de passe"><br>
  <input type="submit" value="Connexion">
</form>
<?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>
