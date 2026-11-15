<?php
declare(strict_types=1);

$offres = [
    ['titre' => 'Stage assistant marketing', 'entreprise' => 'Startup EdTech · Paris', 'description' => 'Création de contenus, newsletters, analyse de campagnes', 'duree' => 'Durée : 3 à 4 mois', 'remuneration' => '650 €/mois'],
    ['titre' => 'Stage développeur front-end', 'entreprise' => 'Agence web · Lyon', 'description' => 'Intégration React, correction de bugs, tests UI', 'duree' => 'Durée : 2 à 6 mois', 'remuneration' => '700 €/mois'],
    ['titre' => 'Chargé de recrutement junior', 'entreprise' => 'Association · Nantes', 'description' => 'Sourcing, entretiens, suivi candidats', 'duree' => 'Durée : 2 mois', 'remuneration' => 'Gratifié'],
];
$termes = trim((string) ($_GET['q'] ?? ''));
if ($termes !== '') {
    $offres = array_values(array_filter($offres, static fn(array $offre): bool => stripos(implode(' ', $offre), $termes) !== false));
}
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stages · FAST INTERN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="stages-page">
<main class="page container-xxl">
    <?php $pageActive = 'stages'; require __DIR__ . '/nav.php'; ?>
    <section class="intro"><h1>Stages pour lancer votre expérience</h1><p>Trouvez un stage selon votre formation, votre ville, vos compétences et vos dates de disponibilité.</p></section>
    <form class="search" method="get" role="search">
        <input class="form-control" type="search" name="q" value="<?= htmlspecialchars($termes, ENT_QUOTES, 'UTF-8') ?>" placeholder="Métier, entreprise ou compétence" aria-label="Métier, entreprise ou compétence">
        <input class="form-control" type="text" name="ville" placeholder="Ville ou télétravail" aria-label="Ville ou télétravail">
        <input class="form-control" type="text" name="domaine" placeholder="Domaine" aria-label="Domaine">
        <button class="button btn btn-primary" type="submit">Rechercher</button>
    </form>
    <nav class="tabs" aria-label="Type d'offre"><a class="tab active" href="stages.php" aria-current="page">Stage</a><a class="tab" href="offres.php">Alternance</a><a class="tab" href="jobs.php">Job étudiant</a></nav>
    <section class="content" aria-label="Offres et filtres">
        <aside class="filters card"><h2>Filtres</h2>
            <label class="filter"><span>Type</span><input class="form-control" value="Stage" aria-label="Type de contrat" readonly></label>
            <label class="filter"><span>Domaine</span><input class="form-control" value="Marketing" aria-label="Domaine" readonly></label>
            <label class="filter"><span>Durée</span><input class="form-control" value="2 à 6 mois" aria-label="Durée" readonly></label>
            <label class="filter"><span>Niveau</span><input class="form-control" value="Bac+1 à Bac+5" aria-label="Niveau" readonly></label>
            <label class="filter"><span>Gratification</span><input class="form-control" value="Avec gratification" aria-label="Gratification" readonly></label>
        </aside>
        <div class="results"><div class="results-heading"><h2>Stages recommandés</h2><p>Des opportunités adaptées à votre niveau, votre domaine et votre localisation.</p></div>
            <div class="listing">
                <?php if ($offres === []): ?><p class="empty">Aucune offre ne correspond à « <?= htmlspecialchars($termes, ENT_QUOTES, 'UTF-8') ?> ».</p>
                <?php else: foreach ($offres as $offre): ?>
                    <article class="job card"><div><h3><?= htmlspecialchars($offre['titre'], ENT_QUOTES, 'UTF-8') ?></h3><p class="company"><?= htmlspecialchars($offre['entreprise'], ENT_QUOTES, 'UTF-8') ?></p><p class="description"><?= htmlspecialchars($offre['description'], ENT_QUOTES, 'UTF-8') ?></p></div>
                        <div class="badges"><span class="badge"><?= htmlspecialchars($offre['duree'], ENT_QUOTES, 'UTF-8') ?></span><span class="badge"><?= htmlspecialchars($offre['remuneration'], ENT_QUOTES, 'UTF-8') ?></span></div>
                        <a class="button btn btn-primary post" href="mailto:recrutement@example.fr?subject=<?= rawurlencode('Candidature — ' . $offre['titre']) ?>">Postuler</a>
                    </article>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <aside class="tip d-flex align-items-center justify-content-between gap-3"><strong>Conseil stage</strong><p>Ajoutez vos projets, vos compétences et vos dates disponibles pour trouver un stage plus rapidement.</p><a class="button btn btn-primary" href="#profil">Mon profil</a></aside>
</main>
</body>
</html>

