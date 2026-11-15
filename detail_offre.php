<?php
declare(strict_types=1);

require __DIR__ . '/data_offres.php';

function e(string $v): string
{
    return htmlspecialchars($v, ENT_QUOTES, 'UTF-8');
}

$offres = getOffres();
$id = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
$offre = ($id !== false && $id !== null) ? ($offres[$id] ?? null) : null;

if ($offre === null) {
    http_response_code(404);
}
$type = $offre['type'] ?? '';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $offre ? e($offre['titre']) . ' | FAST INTERN' : 'Offre introuvable | FAST INTERN' ?></title>
  <link href="recruteur.css" rel="stylesheet">
</head>
<body class="rc">
  <header class="rc-head">
    <a class="rc-logo" href="acceuil.php">FAST <span>INTERN</span></a>
    <nav class="rc-nav" aria-label="Navigation principale">
      <a href="acceuil.php">Accueil</a>
      <a href="stages.php" class="<?= $type === 'Stage' ? 'on' : '' ?>">Stages</a>
      <a href="offres.php" class="<?= $type === 'Alternance' ? 'on' : '' ?>">Alternance</a>
      <a href="jobs.php" class="<?= $type === 'Job étudiant' ? 'on' : '' ?>">Jobs étudiants</a>
    </nav>
    <a class="rc-right" href="profil.php"><span><span class="rc-av" aria-hidden="true">♟</span>Stecy Maria</span></a>
  </header>

  <main class="rc-detail">
  <?php if ($offre === null): ?>
    <div class="rc-sec">
      <h1 style="font-size:22px;margin-bottom:8px">Offre introuvable</h1>
      <p style="color:var(--mut)">Cette offre n'existe pas ou a été supprimée.</p>
    </div>
    <a class="rc-cta" href="acceuil.php">Retour à l'accueil</a>
  <?php else: ?>
    <div class="rc-top">
      <div class="rc-big" aria-hidden="true"><?= e($offre['icone']) ?></div>
      <div>
        <h1><?= e($offre['titre']) ?></h1>
        <p><?= e($offre['entreprise']) ?> · <?= e($offre['domaine']) ?><br>
           <?= e($offre['ville']) ?> · <?= e($offre['duree']) ?> · <?= e($offre['teletravail']) ?></p>
      </div>
    </div>

    <?php if ($offre['statut'] === 'Active'): ?>
      <a class="rc-cta" href="mailto:recrutement@example.fr?subject=<?= rawurlencode('Candidature — ' . $offre['titre']) ?>">Postuler à cette offre</a>
    <?php else: ?>
      <span class="rc-cta off">Offre clôturée</span>
    <?php endif; ?>

    <section class="rc-sec"><h2>Description du poste</h2><p><?= e($offre['description']) ?></p></section>
    <section class="rc-sec"><h2>Missions</h2><ul><?php foreach ($offre['missions'] as $m): ?><li><?= e($m) ?></li><?php endforeach; ?></ul></section>
    <section class="rc-sec"><h2>Compétences recherchées</h2><ul><?php foreach ($offre['competences'] as $c): ?><li><?= e($c) ?></li><?php endforeach; ?></ul></section>
    <section class="rc-sec">
      <h2>Informations complémentaires</h2>
      <p>Durée : <?= e($offre['duree']) ?></p>
      <p>Localisation : <?= e($offre['ville']) ?></p>
    </section>
  <?php endif; ?>
  </main>
</body>
</html>
