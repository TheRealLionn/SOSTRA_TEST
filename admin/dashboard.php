<?php
session_start();
if (!isset($_SESSION['logged'])) { header("Location: login.php"); exit; }
require '../config.php';

$data = $pdo->query("SELECT * FROM inscriptions")->fetchAll(PDO::FETCH_ASSOC);
$stats = [];
foreach ($data as $row) {
    $day = substr($row['date_inscription'], 0, 10);
    $stats[$day] = ($stats[$day] ?? 0) + 1;
}
?>

<h2>Inscriptions</h2>

<!-- Graphique Chart.js -->
<canvas id="chart" width="600" height="300"></canvas>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
const ctx = document.getElementById('chart').getContext('2d');
new Chart(ctx, {
  type: 'line',
  data: {
    labels: <?= json_encode(array_keys($stats)) ?>,
    datasets: [{
      label: 'Inscriptions par jour',
      data: <?= json_encode(array_values($stats)) ?>,
      fill: false,
      borderColor: 'blue',
      tension: 0.1
    }]
  }
});
</script>

<!-- Tableau des inscrits -->
<table border="1" cellpadding="5">
  <tr>
    <th>Nom</th><th>Prénom</th><th>Email</th><th>Entreprise</th><th>Participants</th><th>Date</th><th>Badge</th>
  </tr>
  <?php foreach ($data as $row): ?>
  <tr>
    <td><?= htmlspecialchars($row['nom']) ?></td>
    <td><?= htmlspecialchars($row['prenom']) ?></td>
    <td><?= htmlspecialchars($row['email']) ?></td>
    <td><?= htmlspecialchars($row['entreprise']) ?></td>
    <td><?= $row['participants'] ?></td>
    <td><?= $row['date_inscription'] ?></td>
    <td><a href="badge.php?id=<?= $row['id'] ?>" target="_blank">🎟️</a></td>
  </tr>
  <?php endforeach; ?>
</table>

<p>
  <a href="export.php">📥 Export CSV</a> |
  <a href="rapport_pdf.php" target="_blank">🧾 Rapport PDF</a> |
  <a href="logout.php">Déconnexion</a>
  <a href="admin/badge.php?id=<?= $row['id'] ?>" target="_blank">🎟️ Badge PDF</a>

</p>

