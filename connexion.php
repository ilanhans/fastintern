<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - Fast Intern</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- Barre de navigation supérieure -->
    <header class="navbar">
        <div class="logo">FAST <span>INTERN</span></div>
        <nav class="nav-links">
            <a href="#">Accueil</a>
            <a href="#">Stages</a>
            <a href="#">Alternances</a>
            <a href="#">Jobs étudiants</a>
        </nav>
        <div class="nav-auth">
            <a href="#" class="btn-outline active">Connexion</a>
            <a href="#" class="btn-solid">Inscription</a>
        </div>
    </header>

    <!-- Conteneur principal de la page de connexion -->
    <main class="main-container">
        <div class="auth-card">
            <h1>Bienvenue sur Fast Intern</h1>
            <p class="subtitle">Connectez-vous pour retrouver vos candidatures, vos offres sauvegardées et vos recommandations.</p>
            
            <form>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="votre.email@exemple.com" required>
                </div>
                
                <div class="input-group">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" placeholder="Votre mot de passe" required>
                </div>

                <div class="form-footer-row">
                    <label class="checkbox-label">
                        <input type="checkbox" required>
                        J'accepte les conditions d'utilisation et la politique de confidentialité
                    </label>
                </div>

                <div class="forgot-container">
                    <a href="#" class="forgot-password">Mot de passe oublié ?</a>
                </div>

                <button type="submit" class="btn-primary">Se connecter</button>
            </form>

            <div class="card-bottom-link">
                Pas encore de compte ? <a href="#">Créer un compte</a>
            </div>
        </div>
    </main>

</body>
</html>