<?php
declare(strict_types=1);

$offres = [
    ['titre' => 'Vendeur étudiant', 'entreprise' => 'Boutique mode · Lille', 'description' => 'Accueil client, caisse, mise en rayon', 'rythme' => 'Week-end + mercredi', 'salaire' => '12 €/h'],
    ['titre' => 'Employé polyvalent', 'entreprise' => 'Restaurant · Paris', 'description' => 'Service, préparation, encaissement', 'rythme' => 'Soirs en semaine', 'salaire' => '11,80 €/h'],
    ['titre' => 'Tuteur soutien scolaire', 'entreprise' => 'Plateforme éducative · Télétravail', 'description' => 'Aide aux devoirs niveau collège/lycée', 'rythme' => 'Horaires flexibles', 'salaire' => '15 €/h'],
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
    <title>Jobs étudiants · FAST INTERN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.9/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-yEPZ7jP9S0QKiUQ0m3jjsO4ProIW7wvR9gXkI7JOGa2XVsw53Yke2bsdkBbjmmiX" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="jobs-page">
<main class="page container-xxl">
    <?php $pageActive = 'jobs'; require __DIR__ . '/nav.php'; ?>
    <section class="intro"><h1>Jobs étudiants compatibles avec vos cours</h1><p>Trouvez un job selon vos disponibilités, votre ville et le nombre d'heures souhaité par semaine.</p></section>
    <form class="search" method="get" role="search">
        <input class="form-control" type="search" name="q" value="<?= htmlspecialchars($termes, ENT_QUOTES, 'UTF-8') ?>" placeholder="Métier, entreprise ou compétence" aria-label="Métier, entreprise ou compétence">
        <input class="form-control" type="text" name="ville" placeholder="Ville ou télétravail" aria-label="Ville ou télétravail">
        <input class="form-control" type="text" name="domaine" placeholder="Domaine" aria-label="Domaine">
        <button class="button btn btn-primary" type="submit">Rechercher</button>
    </form>
    <nav class="tabs" aria-label="Type d'offre"><a class="tab" href="stages.php">Stage</a><a class="tab" href="offres.php">Alternance</a><a class="tab active" href="jobs.php" aria-current="page">Job étudiant</a></nav>
    <section class="content" aria-label="Offres et filtres">
        <aside class="filters card"><h2>Filtres</h2>
            <label class="filter"><span>Type</span><input class="form-control" value="Job étudiant" aria-label="Type de contrat" readonly></label>
            <label class="filter"><span>Ville</span><input class="form-control" value="Autour de moi" aria-label="Ville" readonly></label>
            <label class="filter"><span>Disponibilité</span><input class="form-control" value="Soir et week-end" aria-label="Disponibilité" readonly></label>
            <label class="filter"><span>Heures</span><input class="form-control" value="8 à 15 h/semaine" aria-label="Heures par semaine" readonly></label>
            <label class="filter"><span>Contrat</span><input class="form-control" value="CDI étudiant" aria-label="Contrat" readonly></label>
        </aside>
        <div class="results"><div class="results-heading"><h2>Jobs étudiants recommandés</h2><p>Des offres compatibles avec les cours, les week-ends et les disponibilités étudiantes.</p></div>
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
    <aside class="tip d-flex align-items-center justify-content-between gap-3"><div><strong>Conseil job étudiant</strong><p>Indiquez vos horaires de cours, vos disponibilités et votre ville pour recevoir des offres compatibles.</p></div><a class="button btn btn-primary" href="#profil">Mon profil</a></aside>
</main>
</body>
</html>


