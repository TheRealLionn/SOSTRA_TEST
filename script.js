// Placeholder — future animation, sticky behavior, etc.
document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("inscriptionForm");
  const confirmBox = document.getElementById("confirmation");

  form.addEventListener("submit", async (e) => {
    e.preventDefault();
    const formData = new FormData(form);
    
    const res = await fetch("ajax_submit.php", {
      method: "POST",
      body: formData
    });
    
    const data = await res.json();
    if (data.success) {
      form.style.display = "none";
      confirmBox.innerHTML = `
        <h3>✅ Inscription réussie !</h3>
        <p>Merci ${data.prenom}, votre inscription a été enregistrée.</p>
        <a href="generate_badge.php?id=${data.id}" target="_blank" class="btn-primary">🎟️ Télécharger mon badge</a>
      `;
      confirmBox.style.display = "block";
    } else {
      confirmBox.innerHTML = `<p style="color:red;">Erreur : ${data.message}</p>`;
      confirmBox.style.display = "block";
    }
  });
});


console.log("SOSTRA site loaded");
