<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fast Intern – Tableau de bord</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="dash">
  <aside>
    <a class="logo" href="acceuil.php">FAST <span>INTERN</span></a>
    <a class="on" href="dashboard.php">Tableau de bord</a>
    <a href="offres.php">Rechercher une offre</a>
    <a href="mes_candidatures.php">Mes candidatures</a>
    <a href="offres.php">Offres sauvegardées</a>
    <a href="profil.php">Mon profil</a>
    <a href="profil.php">Paramètres</a>
    <a class="out" href="acceuil.php" style="margin-top:auto;color:var(--mut)">Déconnexion</a>
  </aside>

  <main>
    <div class="top">
      <h1>Bonjour Stecy M.,</h1>
      <nav aria-label="Navigation principale">
        <a href="acceuil.php">Accueil</a><a href="stages.php">Stages</a>
        <a href="offres.php">Alternances</a><a href="jobs_etudiants.php">Jobs étudiants</a>
      </nav>
    </div>
    <p class="sub">Voici les meilleures opportunités sélectionnées selon votre profil étudiant.</p>

    <div class="kpis">
      <div class="card"><strong id="kReco">12</strong><span>offres recommandées</span></div>
      <div class="card"><strong id="kApplied">4</strong><span>candidatures envoyées</span></div>
      <div class="card"><strong id="kSaved">3</strong><span>offres sauvegardées</span></div>
    </div>

    <div class="cols">
      <section>
        <h2>Offres recommandées</h2>
        <p class="sub" style="margin-top:-10px">Des annonces proches de votre formation, de votre ville et de vos préférences.</p>
        <div class="list" id="jobs">
          <article class="job">
            <div><strong>Assistant marketing</strong><br><small>Startup EdTech • Paris • Stage</small></div>
            <div class="acts"><button class="ico" data-save aria-pressed="false" aria-label="Sauvegarder">☆</button><button class="btn fill" data-apply>Postuler</button></div>
          </article>
          <article class="job">
            <div><strong>Développeur web junior</strong><br><small>Agence digitale • Lyon • Alternance</small></div>
            <div class="acts"><button class="ico" data-save aria-pressed="false" aria-label="Sauvegarder">☆</button><button class="btn fill" data-apply>Postuler</button></div>
          </article>
          <article class="job">
            <div><strong>Vendeur étudiant</strong><br><small>Boutique mode • Lille • Job étudiant</small></div>
            <div class="acts"><button class="ico" data-save aria-pressed="false" aria-label="Sauvegarder">☆</button><button class="btn fill" data-apply>Postuler</button></div>
          </article>
        </div>
      </section>

      <aside class="card" style="display:block;border-right:1px solid var(--line)">
        <h2 style="margin-bottom:12px">Profil</h2>
        <div class="avatar">SM</div>
        <strong>Stecy Maria</strong>
        <div class="bar" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="40"><i style="width:40%"></i></div>
        <p style="color:var(--mut);font-size:14px;margin-bottom:14px">Ajoutez votre CV et vos compétences pour recevoir des offres plus adaptées.</p>
        <a class="btn fill" href="profil.php">Compléter</a>
      </aside>
    </div>
  </main>
</div>
<div id="toast" role="status" aria-live="polite"></div>
<script src="script.js"></script>
</body>
</html>