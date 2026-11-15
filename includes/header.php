<?php $page = $page ?? 'accueil'; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title>Fast Intern – <?= e($title ?? '') ?></title>
<link rel="stylesheet" href="style.css">
</head>
<body>
<header><div class="wrap"><div class="nav" id="nav">
  <a class="logo" href="acceuil.php">FAST <span>INTERN</span></a>
  <button class="burger" id="burger" aria-label="Ouvrir le menu" aria-expanded="false">☰</button>
  <ul>
    <li><a class="<?= $page==='accueil'?'on':'' ?>" href="acceuil.php">Accueil</a></li>
    <li><a href="stages.php">Stages</a></li>
    <li><a href="offres.php">Alternances</a></li>
    <li><a href="jobs_etudiants.php">Jobs étudiants</a></li>
  </ul>
  <div class="auth" style="display:flex;gap:12px">
    <a class="btn" href="connexion.php">Connexion</a>
    <a class="btn fill" href="inscription.php">Inscription</a>
  </div>
</div></div></header>