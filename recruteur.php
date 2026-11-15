<?php
declare(strict_types=1);

require __DIR__ . '/data_offres.php';

function e(string $v): string
{
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$offres = getOffres();
$candidats = getCandidatsRecents();
$nbOffres = count($offres);
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Espace recruteur | FAST INTERN</title>
  <link href="recruteur.css" rel="stylesheet">
</head>
<body class="rc">
  <header class="rc-head">
    <a class="rc-logo" href="acceuil.php">FAST <span>INTERN</span></a>
    <div class="rc-right">
      <span class="rc-bell" aria-label="Notifications">🔔</span>
      <span><span class="rc-av" aria-hidden="true">♟</span>ISMA Corporation ⌄</span>
    </div>
  </header>

  <div class="rc-dash">
    <aside class="rc-side" aria-label="Menu recruteur">
      <a class="l on" href="recruteur.php">⌂&nbsp; Tableau de bord</a>
      <a class="l" href="#candidats">Candidatures <span class="n">12</span></a>
      <a class="l" href="#">Mon entreprise</a>
      <a class="l" href="#">Messages <span class="n">23</span></a>
      <a class="l" href="#">Paramètres</a>
      <a class="l" href="#offres">Mes offres</a>
      <div class="rc-promo">
        <div class="ic">💼</div>
        <p>Publiez vos offres de stage et d'alternance et trouvez vos futurs talent !</p>
        <a href="#">+ Ajouter une offre</a>
        <a href="#">+ Modifier une offre</a>
      </div>
      <div class="rc-who"><i>RH</i><div><b>Christ Ian</b><small>Recruteur-Entreprise</small></div></div>
    </aside>

    <div class="rc-body">
      <main>
        <h1>Bonjour Christ I.,</h1>
        <p class="rc-sub">Bienvenue sur votre espace recruteur. Gérez vos offres, suivez vos candidatures et trouvez les meilleurs profils.</p>

        <div class="rc-kpis">
          <div class="rc-kpi"><span class="ic">📄</span><strong><?= $nbOffres ?></strong><span>offres Publiées</span></div>
          <div class="rc-kpi"><span class="ic">👥</span><strong>153</strong><span>candidatures reçues</span></div>
          <div class="rc-kpi"><span class="ic">📅</span><strong>14</strong><span>Entretiens planifiés</span></div>
        </div>

        <div class="rc-sech" id="offres"><h2>Mes offres d'emploi</h2><a href="#">Voir plus ›</a></div>
        <?php foreach (array_slice($offres, 0, 2) as $o): ?>
          <a class="rc-offer" href="detail_offre.php?id=<?= (int) $o['id'] ?>">
            <span class="ico" aria-hidden="true"><?= e($o['icone']) ?></span>
            <span class="t">
              <h3><?= e($o['titre']) ?></h3><span class="rc-act"><?= e($o['statut']) ?></span>
              <small><?= e($o['type']) ?>. <?= e($o['duree']) ?></small>
              <small>📍 <?= e($o['ville']) ?> (<?= e($o['dept']) ?>)</small>
            </span>
            <span class="c"><?= (int) $o['candidatures'] ?> Candidatures</span>
          </a>
        <?php endforeach; ?>

        <section class="rc-tbl" id="candidats" aria-labelledby="t-cand">
          <div class="rc-sech" style="margin:0 0 4px"><h2 id="t-cand">Derniers candidats consultés</h2><a href="#">Voir plus ›</a></div>
          <div class="rc-tr h"><span>Nom</span><span>Poste recherché</span><span>Date</span><span></span></div>
          <?php foreach ($candidats as $c): ?>
            <div class="rc-tr">
              <span><i class="pic"></i><?= e($c['nom']) ?></span>
              <span><?= e($c['poste']) ?></span>
              <span><?= e($c['date']) ?></span>
              <span class="rc-pill"><?= e($c['badge']) ?></span>
            </div>
          <?php endforeach; ?>
        </section>
      </main>

      <aside class="rc-ai" aria-label="Assistant AI">
        <div><span class="bot">🤖</span> <b>Assistant AI</b></div>
        <p>Trouvez les meilleurs profils grâce à votre assistant intelligent. Il vous aide à :</p>
        <ul>
          <li>Rédiger vos offres d'emploi</li>
          <li>Analyser les CV</li>
          <li>Préparer vos entretiens</li>
          <li>Obtenir des recommandations de profils</li>
        </ul>
        <a href="#">Découvrir l'assistant</a>
      </aside>
    </div>
  </div>
</body>
</html>
