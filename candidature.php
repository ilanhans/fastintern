<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mes candidatures | FAST INTERN</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="style.css" rel="stylesheet">
</head>
<body>
<div class="fi-app">
  <header class="fi-header"><a class="fi-logo text-decoration-none text-dark" href="profil.php"><span>FAST</span> INTERN</a><nav class="fi-topnav"><a href="#">Accueil</a><a href="#">Stages</a><a href="#">Alternances</a><a href="jobs.php">Jobs étudiants</a></nav><div class="fi-user">
<span class="fi-user-icon">♙</span><span>Stecy Maria</span>
</div></header>
  <div class="fi-layout">
    <aside class="fi-sidebar"><a class="fi-side-link" href="dashboard.php">Tableau de bord</a><a class="fi-side-link" href="offres.php">Rechercher une offre</a><a class="fi-side-link active" href="candidature.php">♟   Mes candidatures</a><a class="fi-side-link" href="offres.php">Offres sauvegardées</a><a class="fi-side-link" href="profil.php">Mon profil</a><a class="fi-side-link" href="#">Paramètres</a><button class="fi-logout" type="button">Déconnexion</button></aside>
    <main class="fi-main"><div class="fi-kicker">09 - Mes candidatures</div>
<h1 class="fi-title">Mes candidatures</h1>
<p class="fi-subtitle">Retrouvez et suivez l'évolution de vos candidatures.</p>
      <div class="fi-tabs" role="tablist" aria-label="Filtrer les candidatures">
<button class="fi-tab active" data-filter="Toutes" type="button">Toutes</button><button class="fi-tab" data-filter="En cours" type="button">En cours</button><button class="fi-tab" data-filter="Entretiens" type="button">Entretiens</button><button class="fi-tab" data-filter="Terminées" type="button">Terminées</button>
</div>
      <section aria-label="Liste des candidatures"><article class="fi-card fi-application" data-category="Entretiens"><div>
<div class="fi-app-title">Stage Développeur Web</div>
<div class="fi-app-meta">TechCompany · Paris · 08/10/2026</div>
</div>
<span class="fi-status">En cours d'examen</span></article>
      <article class="fi-card fi-application" data-category="En cours"><div>
<div class="fi-app-title">Alternance Data Analyst</div>
<div class="fi-app-meta">DataTech · La Défense · 05/10/2026</div>
</div>
<span class="fi-status purple">Entretien</span></article>
      <article class="fi-card fi-application" data-category="Terminées"><div>
<div class="fi-app-title">Assistant administratif</div>
<div class="fi-app-meta">StudentJob · Paris · 02/10/2026</div>
</div>
<span class="fi-status green">Acceptée</span></article></section>
    </main>
  </div>
</div>
<script>
document.querySelectorAll('.fi-tab').forEach(tab=>tab.addEventListener('click',()=>{document.querySelectorAll('.fi-tab').forEach(button=>button.classList.remove('active'));tab.classList.add('active');document.querySelectorAll('.fi-application').forEach(card=>{card.classList.toggle('fi-hidden',tab.dataset.filter!=='Toutes'&&card.dataset.category!==tab.dataset.filter)})}));
</script>
</body>
</html>