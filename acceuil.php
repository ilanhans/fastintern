<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fast Intern – Accueil</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="wrap"><div class="nav" id="nav">
  <a class="logo" href="acceuil.php">FAST <span>INTERN</span></a>
  <button class="burger" id="burger" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
  <ul>
    <li><a class="on" href="acceuil.php">Accueil</a></li>
    <li><a href="stages.php">Stages</a></li>
    <li><a href="offres.php">Alternances</a></li>
    <li><a href="jobs.php">Jobs étudiants</a></li>
  </ul>
  <div class="auth" style="display:flex;gap:12px">
    <a class="btn" href="connexion.php">Connexion</a>
    <a class="btn fill" href="inscription.php">Inscription</a>
  </div>
</div></div></header>

<section class="hero"><div class="wrap">
  <div>
    <h1>Trouvez une opportunité étudiante sans perdre du temps</h1>
    <p class="sub">Stage, alternance ou job étudiant : recherchez, comparez les offres et postulez depuis un seul espace.</p>
    <form class="search" id="searchForm" role="search">
      <input class="q" id="q" type="search" placeholder="Poste, entreprise ou mot-clé" aria-label="Poste, entreprise ou mot-clé">
      <input id="city" type="text" placeholder="Ville ou télétravail" aria-label="Ville ou télétravail">
      <select id="type" aria-label="Type de contrat">
        <option value="">Type de contrat</option>
        <option>Stage</option><option>Alternance</option><option>Job étudiant</option>
      </select>
      <button class="btn fill" type="submit">Rechercher</button>
    </form>
  </div>
  <aside class="card" aria-labelledby="how">
    <h2 id="how" style="margin:0">Comment ça marche ?</h2>
    <ol class="steps">
      <li><b>1</b><span>Choisir son besoin<small>Stage, alternance ou job étudiant</small></span></li>
      <li><b>2</b><span>Comparer les offres<small>Ville, domaine, rythme, salaire</small></span></li>
      <li><b>3</b><span>Postuler et suivre<small>Profil, CV et candidatures</small></span></li>
    </ol>
  </aside>
</div></section>

<main class="wrap">
  <section class="s"><h2>Choisissez votre parcours</h2>
    <div class="paths">
      <a class="path" href="#offres" data-type="Stage"><span class="ic">🎓</span><div><strong>Stage</strong><p>Découvrir une première expérience professionnelle.</p></div></a>
      <a class="path" href="#offres" data-type="Alternance"><span class="ic">💼</span><div><strong>Alternance</strong><p>Trouver une entreprise et une formation compatible.</p></div></a>
      <a class="path" href="#offres" data-type="Job étudiant"><span class="ic">👤</span><div><strong>Job étudiant</strong><p>Travailler selon ses disponibilités et sa ville.</p></div></a>
    </div>
  </section>

  <section class="s"><h2>Pourquoi utiliser Fast Intern ?</h2>
    <div class="stats">
      <div class="card"><strong>+500</strong><span>offres étudiantes</span></div>
      <div class="card"><strong>3</strong><span>types de parcours</span></div>
      <div class="card"><strong>1</strong><span>profil pour postuler</span></div>
      <div class="card"><strong>24h</strong><span>alertes rapides</span></div>
    </div>
  </section>

  <section class="s" id="offres">
    <h2>Offres populaires <span id="filterInfo" style="font-weight:400;color:var(--mut);font-size:14px"></span></h2>
    <div class="offers" id="offers">
      <article class="offer" data-type="Stage"><strong>Stage UX/UI</strong><br><small>Paris • 2 mois</small></article>
      <article class="offer" data-type="Alternance"><strong>Alternance web</strong><br><small>Lyon • 12 mois</small></article>
      <article class="offer" data-type="Job étudiant"><strong>Job vendeur</strong><br><small>Lille • week-end</small></article>
    </div>
    <p id="empty">Aucune offre ne correspond. Essayez un autre mot-clé ou une autre ville.</p>
  </section>
</main>
<script src="script.js"></script>
</body>
</html>