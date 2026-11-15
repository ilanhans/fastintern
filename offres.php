<?php
declare(strict_types=1);

$offres = [
    ['titre' => 'Développeur web en alternance', 'entreprise' => 'Agence digitale · Lyon', 'description' => 'React, intégration, maintenance de sites clients', 'rythme' => 'Rythme : 3 sem. entreprise / 1 sem. école', 'salaire' => '900–1 200 €/mois'],
    ['titre' => 'Assistant chef de projet marketing', 'entreprise' => 'Startup EdTech · Paris', 'description' => 'Campagnes, réseaux sociaux, suivi des performances', 'rythme' => 'Rythme : 4 jours entreprise / 1 jour école', 'salaire' => '850–1 100 €/mois'],
    ['titre' => 'Chargé de recrutement junior', 'entreprise' => 'Cabinet RH · Lille', 'description' => 'Sourcing, entretiens, suivi candidats', 'rythme' => 'Rythme : 2 jours école / 3 jours entreprise', 'salaire' => '800–1 050 €/mois'],
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
    <title>Offres en alternance · FAST INTERN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="style">
</head>
<body>
<main class="page container-xxl">
    <?php $pageActive = 'alternance'; require __DIR__ . '/nav.php'; ?>
    <section class="intro"><h1>Trouvez une offre adaptée à votre parcours</h1><p>Filtrez par type de contrat, domaine, ville et rythme. Chaque carte donne les infos essentielles avant de postuler.</p></section>
    <form class="search" method="get" role="search">
        <input class="form-control" type="search" name="q" value="<?= htmlspecialchars($termes, ENT_QUOTES, 'UTF-8') ?>" placeholder="Métier, entreprise ou compétence" aria-label="Métier, entreprise ou compétence">
        <input class="form-control" type="text" name="ville" placeholder="Ville ou télétravail" aria-label="Ville ou télétravail">
        <input class="form-control" type="text" name="domaine" placeholder="Domaine" aria-label="Domaine">
        <button class="button btn btn-primary" type="submit">Rechercher</button>
    </form>
    <nav class="tabs" aria-label="Type d'offre"><a class="tab" href="stages.php">Stage</a><a class="tab active" href="#alternance">Alternance</a><a class="tab" href="jobs.php">Job étudiant</a></nav>
    <section class="content" aria-label="Offres et filtres">
        <aside class="filters card"><h2>Filtres</h2>
            <label class="filter"><span>Type</span><input class="form-control" value="Alternance" aria-label="Type de contrat" readonly></label>
            <label class="filter"><span>Domaine</span><input class="form-control" value="Informatique" aria-label="Domaine" readonly></label>
            <label class="filter"><span>Rythme</span><input class="form-control" value="3 semaines / 1 semaine" aria-label="Rythme" readonly></label>
            <label class="filter"><span>Niveau</span><input class="form-control" value="Bac+2 à Bac+5" aria-label="Niveau" readonly></label>
            <label class="filter"><span>Contrat</span><input class="form-control" value="12 à 24 mois" aria-label="Durée du contrat" readonly></label>
        </aside>
        <div class="results"><div class="results-heading"><h2>Alternances recommandées</h2><p>Des offres professionnalisantes avec missions, rythme et conditions visibles rapidement.</p></div>
            <div class="listing">
                <?php if ($offres === []): ?><p class="empty">Aucune offre ne correspond à « <?= htmlspecialchars($termes, ENT_QUOTES, 'UTF-8') ?> ».</p>
                <?php else: foreach ($offres as $offre): ?>
                    <article class="job card"><div><h3><?= htmlspecialchars($offre['titre'], ENT_QUOTES, 'UTF-8') ?></h3><p class="company"><?= htmlspecialchars($offre['entreprise'], ENT_QUOTES, 'UTF-8') ?></p><p class="description"><?= htmlspecialchars($offre['description'], ENT_QUOTES, 'UTF-8') ?></p></div>
                        <div class="badges"><span class="badge"><?= htmlspecialchars($offre['rythme'], ENT_QUOTES, 'UTF-8') ?></span><span class="badge"><?= htmlspecialchars($offre['salaire'], ENT_QUOTES, 'UTF-8') ?></span></div>
                        <a class="button btn btn-primary post" href="mailto:recrutement@example.fr?subject=<?= rawurlencode('Candidature — ' . $offre['titre']) ?>">Postuler</a>
                    </article>
                <?php endforeach; endif; ?>
            </div>
        </div>
    </section>
    <aside class="tip d-flex align-items-center justify-content-between gap-3"><div><strong>Astuce profil :</strong><p>Plus le profil étudiant est complet, plus les offres proposées sont pertinentes : compétences, CV, ville, niveau d'études et disponibilités.</p></div><a class="button btn btn-primary" href="#completer-profil">Compléter</a></aside>
</main>
</body>
</html>
