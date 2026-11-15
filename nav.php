<?php
declare(strict_types=1);
?>
<header class="topbar d-flex align-items-center justify-content-between flex-wrap gap-3">
    <a class="brand" href="#accueil" aria-label="FAST INTERN, accueil"><strong>FAST</strong> INTERN</a>
    <nav class="nav d-flex align-items-center gap-4" aria-label="Navigation principale">
        <a href="acceuil.php">Accueil</a>
        <a href="stages.php" class="<?= $pageActive === 'stages' ? 'active' : '' ?>">Stages</a>
        <a href="offres.php" class="<?= $pageActive === 'alternance' ? 'active' : '' ?>">Alternance</a>
        <a href="jobs.php" class="<?= $pageActive === 'jobs' ? 'active' : '' ?>">Jobs étudiants</a>
    </nav>
    <a class="account" href="profil.php"><span class="avatar" aria-hidden="true">♟</span><span>Stecy Maria</span></a>
</header>
