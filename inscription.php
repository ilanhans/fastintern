
<div class="register-section">

    <div class="register-card">

        <h2>Créer votre compte étudiant</h2>

        <p class="register-description">
            Complétez votre profil pour recevoir des offres adaptées à votre parcours.
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

                <label for="email" class="form-label">
                    Adresse e-mail
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

                <button type="submit" name="register" class="btn btn-purple register-button">
                    Créer mon compte
                </button>

            </div>

            <!-- Lien connexion -->
            <p class="register-footer mt-2">

                Vous avez déjà un compte ?

                <a href="index.php?mode=connexion">
                    Se connecter
                </a>

            </p>

        </form>

    </div>

</div>
