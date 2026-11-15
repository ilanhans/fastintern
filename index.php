<<<<<<< HEAD
<?php
declare(strict_types=1);

header('Location: accueil.php', true, 302);
exit;
=======

<?php

// Déterminer la page à afficher
$mode = $_GET['mode'] ?? 'connexion';

// Vérifier la page demandée
if ($mode != 'connexion' && $mode != 'inscription') {
    $mode = 'connexion';
}

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fast Intern</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS personnel -->
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <!-- NAVIGATION -->
    <header class="container-fluid">
        <nav class="navbar fast-navbar">

            <a href="index.php" class="navbar-brand">
                <span class="logo-fast">FAST</span>
                <span class="logo-intern">INTERN</span>
            </a>

            <?php if ($mode == 'connexion') { ?>

                <div class="navbar-nav ms-auto flex-row align-items-center gap-3">

                    <a class="nav-link" href="#">Accueil</a>
                    <a class="nav-link" href="#">Stages</a>
                    <a class="nav-link" href="#">Alternances</a>
                    <a class="nav-link" href="#">Jobs étudiants</a>

                    <a class="btn btn-outline-purple"
                       href="index.php?mode=connexion">
                        Connexion
                    </a>

                    <a class="btn btn-purple"
                       href="index.php?mode=inscription">
                        Inscription
                    </a>

                </div>

            <?php } ?>

        </nav>
    </header>


    <!-- PAGE CONNEXION -->
    <?php if ($mode == 'connexion') { ?>

        <main class="login-section">

            <div class="login-card">

                <h2>Bienvenue sur Fast Intern</h2>

                <p class="login-description">
                    Connectez-vous pour retrouver vos candidatures,
                    vos offres sauvegardées et vos recommandations.
                </p>

                <form action="index.php?mode=connexion" method="POST">

                    <!-- Email -->
                    <div class="form-group mt-4">

                        <label for="email" class="form-label">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="votre.email@exemple.com"
                            class="form-control"
                            required
                        >

                    </div>

                    <!-- Mot de passe -->
                    <div class="form-group mt-3">

                        <label for="password" class="form-label">
                            Mot de passe
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Votre mot de passe"
                            class="form-control"
                            required
                        >

                    </div>

                    <!-- Conditions -->
                    <div class="form-check mt-3">

                        <input
                            type="checkbox"
                            id="conditions"
                            name="conditions"
                            class="form-check-input"
                            required
                        >

                        <label for="conditions" class="form-check-label">
                            J'accepte les conditions d'utilisation
                            et la politique de confidentialité
                        </label>

                    </div>

                    <!-- Mot de passe oublié -->
                    <div class="forgot-password mt-2">

                        <a href="#">
                            Mot de passe oublié ?
                        </a>

                    </div>

                    <!-- Bouton connexion -->
                    <div class="text-center mt-3">

                        <button type="submit" name="login"
                                class="btn btn-purple login-button">
                            Se connecter
                        </button>

                    </div>

                    <!-- Lien inscription -->
                    <p class="login-footer mt-4">

                        Pas encore de compte ?

                        <a href="index.php?mode=inscription">
                            Créer un compte
                        </a>

                    </p>

                </form>

            </div>

        </main>


    <!-- PAGE INSCRIPTION -->
    <?php } else { ?>

        <main class="register-section">

            <div class="register-card">

                <h2>Créer votre compte étudiant</h2>

                <p class="register-description">
                    Complétez votre profil pour recevoir des offres
                    adaptées à votre parcours.
                </p>

                <form action="index.php?mode=inscription" method="POST">

                    <!-- Nom complet -->
                    <div class="form-group mt-4">

                        <label for="name" class="form-label">
                            Nom complet
                        </label>

                        <input
                            type="text"
                            id="name"
                            name="name"
                            placeholder="Ex : Sarah Martin"
                            class="form-control"
                            required
                        >

                    </div>

                    <!-- Email -->
                    <div class="form-group mt-3">

                        <label for="email-register" class="form-label">
                            Adresse e-mail
                        </label>

                        <input
                            type="email"
                            id="email-register"
                            name="email"
                            placeholder="votre.email@exemple.com"
                            class="form-control"
                            required
                        >

                    </div>

                    <!-- Mot de passe -->
                    <div class="form-group mt-3">

                        <label for="password-register" class="form-label">
                            Mot de passe
                        </label>

                        <input
                            type="password"
                            id="password-register"
                            name="password"
                            placeholder="Créez un mot de passe"
                            class="form-control"
                            minlength="8"
                            required
                        >

                    </div>

                    <!-- Formation -->
                    <div class="form-group mt-3">

                        <label for="formation" class="form-label">
                            Formation
                        </label>

                        <input
                            type="text"
                            id="formation"
                            name="formation"
                            placeholder="Ex : Bachelor informatique"
                            class="form-control"
                            required
                        >

                    </div>

                    <!-- Bouton inscription -->
                    <div class="text-center mt-4">

                        <button type="submit" name="register"
                                class="btn btn-purple register-button">
                            Créer mon compte
                        </button>

                    </div>

                    <!-- Lien connexion -->
                    <p class="register-footer mt-3">

                        Vous avez déjà un compte ?

                        <a href="index.php?mode=connexion">
                            Se connecter
                        </a>

                    </p>

                </form>

            </div>

        </main>

    <?php } ?>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
>>>>>>> 56f6aa8 (inscription)
