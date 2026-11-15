
<div class="login-section">

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

            <!-- Bouton -->
            <div class="text-center mt-3">

                <button type="submit" name="login" class="btn btn-purple login-button">
                    Se connecter
                </button>

            </div>

            <!-- Inscription -->
            <p class="login-footer mt-4">

                Pas encore de compte ?

                <a href="index.php?mode=inscription">
                    Créer un compte
                </a>

            </p>

        </form>

    </div>

</div>
